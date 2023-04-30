<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\MarkRepositoryInterface;
use App\Models\TotalMark;
use DB;

class MarkRepository implements MarkRepositoryInterface
{
    public function all($order)
    {
        if(!IsNullOrEmptyString($order)){
            return TotalMark::orderBy('id', 'DESC')->get();
        }else{
            return TotalMark::all();
        }

    }

    public function paginate($limit){
        return TotalMark::orderBy('id', 'DESC')->paginate($limit);
    }

    public function find($id)
    {
        return TotalMark::find($id);
    }

    public function getTotalMarkByProductIdAndUserId($productId, $userId){
        return TotalMark::where(['total_marks.user_mark_id'=>$userId, 'total_marks.product_id'=>$productId])->first();
    }

    public function getCountMarkProductByProductIdAndLevel($productId, $level){
        return DB::select("SELECT count(*) as 'count' FROM total_marks WHERE product_id = ? AND level = ? AND type = 1",[$productId,$level]);
    }
}
