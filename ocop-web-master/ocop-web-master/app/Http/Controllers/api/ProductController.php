<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Contracts\EntityRepositoryInterface;
use App\Repositories\Eloquents\EntityRepository;
use App\Repositories\Contracts\ProductTypeRepositoryInterface;
use App\Repositories\Eloquents\ProductTypeRepository;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Eloquents\ProductRepository;
use Illuminate\Support\Facades\Validator;
use DB;

class ProductController extends Controller
{
	private $entityRepository;
    private $productTypeRepository;
    private $productRepository;

    public function __construct(
		EntityRepositoryInterface $entityRepository,
        ProductTypeRepositoryInterface $productTypeRepository,
        ProductRepositoryInterface $productRepository
		)
    {
		$this->entityRepository = $entityRepository;
        $this->productTypeRepository = $productTypeRepository;
        $this->productRepository = $productRepository;
    }

    /**
     * @param Request $request
     * @return JsonResponse product
     */
    public function getProducts(Request $request, $id) {
        // $size = $request->size ? $request->size : 20;
        // $user= Product::where("entity_id", $id)->paginate($size);
        // return response()->json($this->toPageResponse($user), 200);

		$user = auth('api')->user();
		$entity = $this->entityRepository->getEntity2($user->id, $id);
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
        $response = (object)[
			"data" => $products
		];
        return response()->json($response);
    }

    public function createProduct(Request $request){
        try {

            $data = $request->json()->all();

            $rule = [
                'name'        =>'required',
                'entity_id' =>'required',
                'product_type'=>'required',
                'province_id'     =>'required',
                'district_id' =>'required',
                'ward_id' =>'required'
            ];

            $messages = [
                'name.required'    =>'Tên không được để trống',
                'entity_id.required'      =>'Không có chủ thể',
                'product_type.required' => 'Chưa chọn loại sản phẩm',
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
            $user = auth('api')->user();

            $entityId = $data['entity_id'];
            $name = $data['name'];
            $productType = $data['product_type'];
            $image = $data['image'];
            $provinceId = $data['province_id'];
            $districtId = $data['district_id'];
            $ward_id = $data['ward_id'];
            $year = \Carbon\Carbon::now()->year;
            $count = Product::where('user_id',$user->id)->count();
            $count += 1;
            $code =  $provinceId.'-'.$districtId.'-'.$ward_id.'-'.$count.'-'.$year;

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
            return response()->json([
                'data' => 'success'
            ]);
        } catch (Exception $e) {
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

    public function detailProduct(Request $request, $id){
        $user = auth('api')->user();
        $product = $this->productRepository->find($id);
        $entityId = $product->entity_id;
        $entity = $this->entityRepository->getEntity($user->id,$entityId);

        $response = (object)[
			"product" => $product,
            "entity" => $entity
		];
        return response()->json($response);
    }

    public function getProductType(){
        $productTypes = $this->productTypeRepository->all('');
        $response = (object)[
			"data" => $productTypes,
		];
        return response()->json($response);

    }

    public function updateProduct(Request $request,$id){
        try {
            $user = auth('api')->user();
            $data = $request->json()->all();
            $entityId = $data['entity_id'];
            $name = $data['name'];
            $productType = $data['product_type'];
            $image = $data['image'];
      
            $product = Product::find($id);
    
            $product->name = $name;
            $product->product_type = $productType;
            if(!empty($image)){
                $product->image = $image;
            }
            $product->save();
            return response()->json([
                'data' => 'success'
            ]);
        } catch (\Exception $e) {
            $error = (object)[
                "status" => 'error',
                "message" => 'Sửa sản phẩm thất bại'
            ];
            return response()->json([
                'error' => $error,
            ], 400);
        }
	}
}
