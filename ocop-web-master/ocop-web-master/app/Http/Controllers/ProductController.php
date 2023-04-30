<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\UnitTypeRepositoryInterface;
use App\Repositories\Eloquents\UnitTypeRepository;
use App\Repositories\Contracts\ProductTypeRepositoryInterface;
use App\Repositories\Eloquents\ProductTypeRepository;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Eloquents\ProductRepository;
use App\Repositories\Contracts\LocationRepositoryInterface;
use App\Repositories\Eloquents\LocationRepository;
use App\Repositories\Contracts\EntityRepositoryInterface;
use App\Repositories\Eloquents\EntityRepository;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Eloquents\UserRepository;
use Request;
use Auth;
use App\Models\Product;
use App\Models\Province;
use App\Models\District;
use Validator;

class ProductController extends Controller
{
	private $unitTypeRepository;
	private $productTypeRepository;
	private $locationRepository;
	private $entityRepository;
	private $productRepository;
	private $userRepository;

	public function __construct(
		UnitTypeRepositoryInterface $unitTypeRepository, 
		ProductTypeRepositoryInterface $productTypeRepository,
		ProductRepositoryInterface $productRepository, 
		LocationRepositoryInterface $locationRepository,
		EntityRepositoryInterface $entityRepository,
		UserRepositoryInterface $userRepository
		)
    {
		$this->unitTypeRepository = $unitTypeRepository;
        $this->productTypeRepository = $productTypeRepository;
		$this->productRepository = $productRepository;
		$this->locationRepository = $locationRepository;
		$this->entityRepository = $entityRepository;
		$this->userRepository = $userRepository;
    }

    public function getCreateProduct(){
        if(Auth()->guard('web')->check()){
			$user = Auth::user();
			$unitTypes = $this->unitTypeRepository->all('');
			$productTypes = $this->productTypeRepository->all('');
			$entityId = Request::input('entity_id');
			$entity = $this->entityRepository->getEntity($user->id,$entityId);
			//dd($entity->products);
			$year = \Carbon\Carbon::now()->year;
			$provinceId = $entity->province_id;
			$districtId = $entity->district_id;
			$province = Province::find($provinceId);
			$district = District::find($districtId);
			return view('product.create', compact('entity','unitTypes', 'productTypes','province','district','year'));
		}else{
			return redirect()->route('getlogin');
		}
    }

	public function postCreateProduct(){
		if(Auth()->guard('web')->check()){
			$user = Auth::user();
			if(Request::ajax()){
				try {
					$data = Request::all();

					$rule = [
						'code'        =>'required|unique:products,code'
					];

					$messages = [
    
						'code.required'    =>'Chưa nhập mã sản phẩm',
						'code.unique'      =>'Mã sản phẩm bị trùng'
					];

					$validation = Validator::make($data, $rule, $messages);
					if ($validation   ->fails()) {
						return 'Mã sản phẩm bị trùng';
					} else {
						$entityId = $data['entity_id'];
						$name = $data['name'];
						$productType = $data['product_type'];
						$image = $data['image'];
						$provinceId = $data['province_id'];
						$province = Province::find($provinceId);
						$districtId = $data['district_id'];
						$district = District::find($districtId);
	
						$ward_id = $data['ward_id'];
						$year = \Carbon\Carbon::now()->year;
						$count = Product::where('user_id',$user->id)->count();
						$count += 1;
						$code =  $data['code'];//$provinceId.'-'.$districtId.'-'.$ward_id.'-'.$count.'-'.$year;
						
						//$productCode = $province->code_int.'-'.$district->code.'-'.$code.'-'.$year;
						$product = new Product;
						$product->user_id = $user->id;
						$product->entity_id = $entityId;
						$product->name = $name;
						$product->product_type = $productType;
						$product->image = $image;
						$product->code = $code;
						$product->save();
						$entity = $this->entityRepository->find($entityId);
						$entity->products()->attach($product->id);
						return 'success';
					}


				} catch (Exception $e) {
					return 'failed';
				}
			}
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function getProductsByEntityId()
    {
		$entityId = Request::input('entity_id');
		$user = Auth::user();
		$entity = $this->entityRepository->getEntity2($user->id, $entityId);
		$products = $entity->products;
		foreach($products as $product){
			$result = $this->productRepository->getProofsByProductId($product->id);
			if(isset($result) && $result[0]->count > 0){
				$totalProcess = $result[0]->count * 100 / 5;
				$product["total_process"] = $totalProcess;
			}else{
				$product["total_process"] = 0;
			}
		}
		$data = (object) [
			"entity" => $entity,
			"products" => $products
		];
        return response()->json($data);
    }

	public function getProductById(Request $request){
		$productId = Request::input('product_id');
		$product = $this->productRepository->getProductByProductId($productId);
		return response()->json($product);
	}

	public function getEditProduct(){
        if(Auth()->guard('web')->check()){
			$user = Auth::user();
			$unitTypes = $this->unitTypeRepository->all('');
			$productTypes = $this->productTypeRepository->all('');
			$product = $this->productRepository->find(Request::input('product_id'));
			$codeArr = explode('-',$product->code);
			$countArr = count($codeArr);
			$provinceCode = $codeArr[0];
			$districtCode = $codeArr[1];
			$year = $codeArr[$countArr - 1]; // Vì có mã cũ count = 5 mới là 4
			$count = $codeArr[$countArr - 2];
			$entityId = Request::input('entity_id');
			$entity = $this->entityRepository->getEntity(Request::input('created_userid'),$entityId);
			return view('product.edit', compact('entity','unitTypes', 'productTypes','product','provinceCode','districtCode','count','year'));
		}else{
			return redirect()->route('getlogin');
		}
    }

	public function postEditProduct(){
		if(Auth()->guard('web')->check()){
			$user = Auth::user();
			if(Request::ajax()){
				try {
					$data = Request::all();
					$productId = $data['product_id'];
					$rule = [
						'code'        =>"required|unique:products,code,{$productId}"
					];

					$messages = [
    
						'code.required'    =>'Chưa nhập mã sản phẩm',
						'code.unique'      =>'Mã sản phẩm bị trùng'
					];


					$entityId = $data['entity_id'];
					$name = $data['name'];
					$productType = $data['product_type'];
					$image = $data['image'];
					//$provinceId = $data['province_id'];
					//$districtId = $data['district_id'];
					//$ward_id = $data['ward_id'];
					//$year = \Carbon\Carbon::now()->year;
					//$count = Product::where('user_id',$user->id)->count();
					//$count += 1;
					//$code =  $provinceId.'-'.$districtId.'-'.$ward_id.'-'.$count.'-'.$year;
					$product = Product::find($data['product_id']);
					$code =  $data['code'];//$provinceId.'-'.$districtId.'-'.$ward_id.'-'.$count.'-'.$year;
					// $codeArr = explode('-',$product->code);
					// $countArr = count($codeArr);
					// $provinceCode = $codeArr[0];
					// $districtCode = $codeArr[1];
					// $year = $codeArr[$countArr - 1]; // Vì có mã cũ count = 5 mới là 4
					// $productCode = $provinceCode.'-'.$districtCode.'-'.$codeCount.'-'.$year;

					//$product->user_id = $user->id;
					//$product->entity_id = $entityId;
					$product->code = $code;
					$product->name = $name;
					$product->product_type = $productType;
					if(!empty($image)){
						$product->image = $image;
					}
					//$product->code = $code;
					$product->save();
					// $entity = $this->entityRepository->find($entityId);
					// $entity->products()->attach($product->id);
					return 'success';
				} catch (Exception $e) {
					report($e);
				
					return 'failed';
				}
			}
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function searchMemberEntity(Request $request){
		$keyword = Request::input('keyword');
		$members = $this->userRepository->searchAccountEntity($keyword);
		return response()->json($members);
	}
}
