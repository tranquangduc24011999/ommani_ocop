<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\EvaluationRepositoryInterface;
use App\Models\Product;
use DB;

class EvaluationRepository implements EvaluationRepositoryInterface
{
    public function all($order)
    {
        if(!IsNullOrEmptyString($order)){
            return Product::orderBy('id', 'DESC')->get();
        }else{
            return Product::all();
        }
        
    }

    public function paginate($limit){
        return Product::orderBy('id', 'DESC')->paginate($limit);
    }

    public function find($id)
    {
        return Product::find($id);
    }

    public function getProductsEvaluation($user){
        $results = DB::select("SELECT p.id, p.name, p.image, p.user_id, p.product_type,
        (SELECT name FROM product_types WHERE id = p.product_type) as product_type_name,p.status, p.created_at, 
        (SELECT expired FROM councils WHERE id = mc.council_id) as expired,
        (SELECT name FROM councils WHERE id = mc.council_id) as council_name , 
        (SELECT name FROM entities WHERE id = p.entity_id) as entity_name, p.entity_id, mc.council_id, mc.type as council_type
        FROM member_councils mc JOIN product_councils pc ON mc.council_id = pc.council_id JOIN products p ON pc.product_id = p.id 
        WHERE mc.user_id = $user->id GROUP BY pc.council_id");
        return $results;
    }

    public function filterProductsEvaluation($data){
        $user = $data->user;
        $query = DB::table("member_councils")
        ->selectRaw('products.id, products.name, products.image, products.user_id, products.product_type,(SELECT name FROM product_types WHERE id = p.product_type) as product_type_name,products.status, products.created_at, (SELECT expired FROM councils WHERE id = member_councils.council_id) as expired,(SELECT name FROM councils WHERE id = member_councils.council_id) as council_name , (SELECT entities.name FROM entities WHERE entities.id = products.entity_id limit 1) as entity_name, member_councils.council_id,entity_addresses.province_id,entity_addresses.district_id')
        ->join('product_councils','member_councils.council_id','=','product_councils.council_id')
        ->join('products','product_councils.product_id','=','products.id')
        ->join('entities','entities.id','=','products.entity_id')
        ->join('entity_addresses', "entities.id", "=", "entity_addresses.entity_id")
        ->where('member_councils.user_id',$user->id)
        ->groupBy('product_councils.council_id');

        if (!empty($data->status) && $data->status != null && $data->status != 'ALL'){
            $query = $query->where("status", $data->status);
        }
        if (!empty($data->product) && $data->product != null){
            $productName = "%". $data->product . "%";
            $query = $query->where("products.name","like", $productName)->orWhere("products.code","like", $productName);
        }

        if (!empty($data->product_type) && $data->product_type != null && $data->product_type != 0){
            $query = $query->where("product_type", $data->product_type);
        }

        if(!empty($data->province) && $data->province != null && $data->province != 0){
            $query = $query->whereIn("entity_addresses.province_id", [$data->province]);
        }
        if(!empty($data->district) && $data->district != null){
            $query = $query->whereIn("entity_addresses.district_id", [$data->district]);
        }

        $results = $query->get();

        return $results;
    }

    /*
        - type = 1 là giám khảo chấm
        - type = 0 là tự chấm 
    */
    public function getMembersMarkedByProductId($productId,$councilId ,$level){
        $results = DB::select("SELECT product_id, user_mark_id, point, (SELECT name FROM users WHERE id = user_mark_id limit 1) as name  FROM total_marks WHERE product_id = ? AND council_id = ? AND level = ? AND type = 1",[$productId,$councilId, $level]);
        return $results;
    }

    public function getProductHelpTeam($user, $limit, $offset){
        if($offset <= 0){
            $offset == 1;
        }
        $start = ($limit * ($offset - 1));
        $results = DB::select("SELECT p.id, p.name, p.image, p.user_id, p.product_type,p.status, p.created_at,
        (SELECT expired FROM councils WHERE id = pc.council_id) as expired , 
        (SELECT name FROM entities WHERE id = p.entity_id) as entity_name, pc.council_id ,c.name as council_name
        FROM product_councils pc JOIN products p ON pc.product_id = p.id 
        WHERE pc.council_id IN (SELECT c.id FROM member_help_teams mht JOIN help_teams ht ON mht.team_id = ht.id JOIN councils c ON ht.council_id = c.id WHERE mht.user_id = $user->id) LIMIT ? OFFSET ?",[$limit,$start]);
        return $results;
    }
}