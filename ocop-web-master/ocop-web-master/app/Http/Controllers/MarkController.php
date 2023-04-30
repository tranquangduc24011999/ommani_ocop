<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\Contracts\MarkRepositoryInterface;
use App\Repositories\Eloquents\MarkRepository;
use App\Repositories\Contracts\CouncilRepositoryInterface;
use App\Repositories\Eloquents\CouncilRepository;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Eloquents\ProductRepository;
use App\Models\TotalMark;
use App\Models\User;
use App\Models\Product;
use DB;

class MarkController extends Controller
{
    private $markRepository;
    private $productRepository;
    private $councilRepository;

    public function __construct(
	    MarkRepositoryInterface $markRepository,
        CouncilRepositoryInterface $councilRepository,
        ProductRepositoryInterface $productRepository
	)
    {
		$this->markRepository = $markRepository;
        $this->councilRepository = $councilRepository;
        $this->productRepository = $productRepository;
    }

    public function saveTotalMarkByUser(Request $request){
        if(Auth()->guard('web')->check()){
			if($request->ajax()){
                try {
                    DB::beginTransaction();
                    $totalMarkExist = $this->markRepository->getTotalMarkByProductIdAndUserId($request->product_id,$request->user_id);
                    $user = User::find($request->user_id);
                    if(isset($totalMarkExist)){
                        $totalMarkExist->point = $request->point;
                        $totalMarkExist->save();
                    }else{
                        $totalMark = new TotalMark;
                        $totalMark->product_id = $request->product_id;
                        $totalMark->council_id = isset($request->council_id) && $request->council_id != null ? $request->council_id : 0;
                        $totalMark->user_mark_id = $request->user_id;
                        $totalMark->point = $request->point;
                        $totalMark->status = $request->status;
                        $totalMark->type = $request->type;
                        $user = User::find($request->user_id);
                        $totalMark->level = $user->level;
                        $totalMark->save();
                    }
                    $countMember = $this->councilRepository->getMemberCountOfCouncilByProductIdAndLevel($request->product_id, $user->level);
                    $countMarkProduct = $this->markRepository->getCountMarkProductByProductIdAndLevel($request->product_id, $user->level);
                    $product = $this->productRepository->find($request->product_id);
                    if(isset($countMember) && isset($countMarkProduct)){
                        $countM = $countMember[0]->count;
                        $countMarkP = $countMarkProduct[0]->count;
                        if($countM - 1 == $countMarkP){ // -1 vì trừ thư ký không được chấm
                            if(isset($product)){
                                //Chấm xong: trạng thái hoàn thành
                                $product->status = 'DONE';
                            }
                        }else{
                            //Trạng thái chờ chấm
                            $product->status = 'WAITTING';
                        }
                    }else{
                        $product->status = 'WAITTING';
                    }
                    DB::commit();
                    return 'success';
                } catch (\Exception $e) {
                    DB::rollback();
                    return 'fail';
                }
			}
		}else{
			return redirect()->route('getlogin');
		}
    }

}
