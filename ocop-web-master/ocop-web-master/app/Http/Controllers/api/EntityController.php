<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Entity;
use App\Models\EntityAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Repositories\Contracts\UnitTypeRepositoryInterface;
use App\Repositories\Eloquents\UnitTypeRepository;
use App\Repositories\Contracts\LocationRepositoryInterface;
use App\Repositories\Eloquents\LocationRepository;
use App\Repositories\Contracts\EntityRepositoryInterface;
use App\Repositories\Eloquents\EntityRepository;
use Illuminate\Support\Facades\Validator;
use DB;

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

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse subject
     */
    public function getEntities(Request $request) {
        $size = $request->size ? $request->size : 20;
        $id = auth('api')->user()->id;
        //$entities = Entity::where("user_id", $id)->paginate($size);
        $entities = Entity::where('user_id',$id)->leftJoin('entity_addresses','entities.id','=','entity_addresses.entity_id')->select('entities.*','entity_addresses.entity_id','entity_addresses.province_id','entity_addresses.province','entity_addresses.province_prefix','entity_addresses.district_id','entity_addresses.district','entity_addresses.district_prefix','entity_addresses.ward_id','entity_addresses.ward','entity_addresses.ward_prefix','entity_addresses.street')->paginate($size);
        return response()->json($this->toPageResponse($entities), 200);
    }

    public function getUnitTypes(){
        $unitTypes = $this->unitTypeRepository->all('');
        $response = (object)[
			"data" => $unitTypes,
		];
        return response()->json($response);
    }

    public function createEntity(Request $request){
        try {

            $data = $request->json()->all();

            $rule = [
                'name'        =>'required',
                'unit_id' =>'required',
                'province_id'     =>'required',
                'district_id' =>'required',
                'ward_id' =>'required'
            ];

            $messages = [
                'name.required'    =>'Tên không được để trống',
                'unit_id.required'      =>'Chưa chọn loại hình đơn vị',
                'province_id.required' =>'Chưa chọn tỉnh thành',
                'district_id.required' =>'Chưa chọn quận huyện',
                'ward_id.required'            =>'Chưa chọn phường xã'
            ];

            $validation = Validator::make($data, $rule, $messages);
            if ($validation->fails()) {
                $error = (object) [
                'satus' => 'error',
                'message' =>$validation->messages()->first()
                ];

                return $this->respond([
                                       'error' => $error,
                                       ]);
            }

            DB::beginTransaction();
            $user = auth('api')->user();


            $entity = new Entity;
            $entity->name = $data["name"];
            $entity->user_id = $user->id;
            $entity->unit_id = $data["unit_id"];
            $entity->save();

            $entityAddress = new EntityAddress;
            $entityAddress->entity_id = $entity->id;

            //Province
            $entityAddress->province_id = $data["province_id"];
            $province = $this->locationRepository->find($entityAddress->province_id);
            $entityAddress->province = $province->name;


            //District
            $entityAddress->district_id = $data["district_id"];
            $district = $this->locationRepository->getDistrict($entityAddress->district_id);
            $entityAddress->district = $district->name;
            $entityAddress->district_prefix = $district->prefix;

            //Ward
            $entityAddress->ward_id = $data["ward_id"];
            $ward = $this->locationRepository->getWard($entityAddress->ward_id);
            $entityAddress->ward = $ward->name;
            $entityAddress->ward_prefix = $ward->prefix;

            $entityAddress->save();
            DB::commit();
            return response()->json([
                'data' => 'success'
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            $error = (object)[
                "status" => 'error',
                "message" => 'Tạo chủ thể thất bại'
            ];
            return response()->json([
                'error' => $error,
            ], 400);
        }
    }
}
