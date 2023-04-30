<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\UnitTypeRepositoryInterface;
use App\Repositories\Eloquents\UnitTypeRepository;
use App\Repositories\Contracts\LocationRepositoryInterface;
use App\Repositories\Eloquents\LocationRepository;
use App\Repositories\Contracts\EntityRepositoryInterface;
use App\Repositories\Eloquents\EntityRepository;
use App\Http\Requests\CreateEntityRequest;
use Validator;
use App\Models\Entity;
use App\Models\EntityAddress;
use Auth;

class EntityController extends Controller
{
	private $unitTypeRepository;
	private $locationRepository;
	private $entityRepository;

    public function __construct(
		UnitTypeRepositoryInterface $unitTypeRepository,
		LocationRepositoryInterface $locationRepository,
		EntityRepositoryInterface $entityRepository
		)
    {
        $this->unitTypeRepository = $unitTypeRepository;
		$this->locationRepository = $locationRepository;
		$this->entityRepository = $entityRepository;
    }

    public function index(){
		if(Auth()->guard('web')->check()){
			return view('entity.index');
		}else{
			return redirect()->route('getlogin');
		}

	}

    public function getCreateEntity(){
        if(Auth()->guard('web')->check()){
			$unitTypes = $this->unitTypeRepository->all('');
			$provinces = $this->locationRepository->all('');
			return view('entity.create', compact('unitTypes','provinces'));
		}else{
			return redirect()->route('getlogin');
		}
    }

	public function postCreateEntity(CreateEntityRequest $request){
		if(Auth()->guard('web')->check()){

			$user = Auth::user();
			$entity = new Entity;
			$entity->name = $request->txtName;
			$entity->user_id = $user->id;
			$entity->unit_id = $request->txtTypeAdress;
			$entity->save();

			$entityAddress = new EntityAddress;
			$entityAddress->entity_id = $entity->id;

			//Province
			$entityAddress->province_id = $request->cboPos;
			$province = $this->locationRepository->find($entityAddress->province_id);
			$entityAddress->province = $province->name;


			//District
			$entityAddress->district_id = $request->cboDistricts;
			$district = $this->locationRepository->getDistrict($entityAddress->district_id);
			$entityAddress->district = $district->name;
			$entityAddress->district_prefix = $district->prefix;

			//Ward
			$entityAddress->ward_id = $request->cboWards;
			$ward = $this->locationRepository->getWard($entityAddress->ward_id);
			$entityAddress->ward = $ward->name;
			$entityAddress->ward_prefix = $ward->prefix;

			$entityAddress->save();

//			return redirect()->route('getCreateEntity')->with([
//				'flash_message' => 'Tạo chủ thể thành công!!!',
//				'flash_level'   => 'success'
//			]);
			return redirect()->route('entities')->with([
				'flash_message' => 'Tạo chủ thể thành công!!!',
				'flash_level'   => 'success'
			]);
		}else{
			return redirect()->route('getlogin');
		}
	}

    public function getJoinEntity(){
        if(Auth()->guard('web')->check()){
			return view('entity.join');
		}else{
			return redirect()->route('getlogin');
		}
    }

	public function getDistrict(Request $request)
    {
        $districts = $this->locationRepository->getDistrictByProvince($request->province_id);
        return response()->json($districts);
    }

    public function getWard(Request $request)
    {
		$wards = $this->locationRepository->getWardByDistrict($request->district_id);
        return response()->json($wards);
    }

	public function getEntitiesByUserId()
    {
		$user = Auth::user();
		$entities = $this->entityRepository->getEntitiesByUserId($user->id);
		$data = (object) [
			"user" => $user,
			"entities" => $entities
		];
        return response()->json($data);
    }
}
