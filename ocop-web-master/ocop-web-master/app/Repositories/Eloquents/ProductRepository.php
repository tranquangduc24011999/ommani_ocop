<?php

namespace App\Repositories\Eloquents;

use App\Models\Entity;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Models\Product;
use App\Models\Council;
use DB;

class ProductRepository implements ProductRepositoryInterface
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

    public function getProductById($id){
        $product = $this->find($id);
        $product->entities;
        return $product;
    }

    public function getProductByLevel($user){
        //Cấp Huyện
        if($user->level == 3){
            $locationId = $user->address->district_id;
            $results = DB::select("SELECT p.id, p.name, p.code,p.image,e.name as entity_name FROM entities e JOIN products p ON e.id = p.entity_id JOIN entity_addresses ea ON e.id = ea.entity_id WHERE ea.district_id = $locationId");
            return $results;
        }else if($user->level == 2){
            $locationId = $user->address->province_id;
            $results = DB::select("SELECT p.id, p.name, p.code,p.image,e.name as entity_name  FROM entities e JOIN products p ON e.id = p.entity_id JOIN entity_addresses ea ON e.id = ea.entity_id WHERE ea.province_id = $locationId");
            return $results;
        }else{
            $results = DB::select("SELECT p.id, p.name, p.code,p.image,e.name as entity_name  FROM entities e JOIN products p ON e.id = p.entity_id JOIN entity_addresses ea ON e.id = ea.entity_id");
            return $results;
        }

    }

    public function getProductByLevelPaging($user, $limit, $offset){
        if($offset <= 0){
            $offset == 1;
        }
        $start = ($limit * ($offset - 1));
        //Cấp Huyện
        if($user->level == 3){
            $locationId = $user->address->district_id;
            $results = DB::select("SELECT p.id, p.name, p.code,p.image, p.status,p.created_at, p.user_id,p.product_type,e.name as entity_name,e.id as entity_id FROM entities e JOIN products p ON e.id = p.entity_id JOIN entity_addresses ea ON e.id = ea.entity_id WHERE ea.district_id = $locationId LIMIT ? OFFSET $start",[$limit]);
            return $results;
        }else if($user->level == 2){
            $locationId = $user->address->province_id;
            $results = DB::select("SELECT p.id, p.name, p.code,p.image, p.status,p.created_at,p.user_id,p.product_type,e.name as entity_name,e.id as entity_id  FROM entities e JOIN products p ON e.id = p.entity_id JOIN entity_addresses ea ON e.id = ea.entity_id WHERE ea.province_id = $locationId LIMIT ? OFFSET $start",[$limit]);
            return $results;
        }else{
            $results = DB::select("SELECT p.id, p.name, p.code,p.image, p.status,p.created_at,p.user_id,p.product_type,e.name as entity_name,e.id as entity_id  FROM entities e JOIN products p ON e.id = p.entity_id JOIN entity_addresses ea ON e.id = ea.entity_id LIMIT ? OFFSET $start",[$limit]);
            return $results;
        }
    }

    public function getFilterProduct($data){
        $name = "%". $data->entity . "%";
        $query = Entity::select("products.id", "products.name", "products.code", "products.image", "products.status",
            "products.created_at", "products.user_id", "products.product_type", "entities.name as entity_name",",entities.id as entity_id")
            ->join('products', "entities.id", "=", "products.entity_id")
            ->join('entity_addresses', "entities.id", "=", "entity_addresses.entity_id");
        
        if ($data->entity != '' && $data->entity != null){
            $query = $query->where("entities.name", "like", $name);
        }
        if (!empty($data->status) && $data->status != null){
            $query = $query->whereIn("products.status", [$data->status]);
        }
        if (!empty($data->product) && $data->product != null){
            $productName = "%". $data->product . "%";
            $query = $query->where("products.name","like", $productName)->orWhere("products.code","like", $productName);
        }
        if ($data->cboDate != 0 && $data->from != '' && $data->from != null && $data->to != '' && $data->to != null){
            $query = $query->whereBetween("products.created_at", [$data->from, $data->to]);
        }
        if(!empty($data->province) && $data->province != null){
            $query = $query->whereIn("entity_addresses.province_id", [$data->province]);
        }
        if(!empty($data->district) && $data->district != null){
            $query = $query->whereIn("entity_addresses.district_id", [$data->district]);
        }
        if(!empty($data->ward) && $data->ward != null){
            $query = $query->whereIn("entity_addresses.ward_id", [$data->ward]);
        }
        $results = $query->get();
        return $results;
    }

    public function getProductsByCouncil($id){
        $results = DB::select("SELECT p.id, p.name, p.image, p.code, (SELECT e.name FROM entities e WHERE e.id = p.entity_id ) as entity_name FROM product_councils pc JOIN products p ON pc.product_id = p.id WHERE pc.council_id = $id");
        return $results;
    }

    public function getProductsOtherByCouncil($user, $id){
        //Cấp Huyện
        if($user->level == 3){
            $locationId = $user->address->district_id;
            $results = DB::select("SELECT p.id, p.name, p.code,p.image,e.name as entity_name FROM entities e JOIN products p ON e.id = p.entity_id JOIN entity_addresses ea ON e.id = ea.entity_id WHERE ea.district_id = $locationId AND p.id NOT IN (SELECT product_id FROM product_councils WHERE council_id = $id )");
            return $results;
        }else if($user->level == 2){
            $locationId = $user->address->province_id;
            $results = DB::select("SELECT p.id, p.name, p.code,p.image,e.name as entity_name  FROM entities e JOIN products p ON e.id = p.entity_id JOIN entity_addresses ea ON e.id = ea.entity_id WHERE ea.province_id = $locationId AND p.id NOT IN (SELECT product_id FROM product_councils WHERE council_id = $id");
            return $results;
        }else{
            $results = DB::select("SELECT p.id, p.name, p.code,p.image,e.name as entity_name  FROM entities e JOIN products p ON e.id = p.entity_id JOIN entity_addresses ea ON e.id = ea.entity_id WHERE p.id NOT IN (SELECT product_id FROM product_councils WHERE council_id = $id");
            return $results;
        }
    }

    public function searchProductsOtherByCouncil($user, $id, $keyword){
        $keyword = $keyword.'%';
        if($user->level == 3){
            $locationId = $user->address->district_id;
            $results = DB::select("SELECT p.id, p.name, p.code,p.image,e.name as entity_name FROM entities e JOIN products p ON e.id = p.entity_id JOIN entity_addresses ea ON e.id = ea.entity_id WHERE ea.district_id = $locationId AND p.id NOT IN (SELECT product_id FROM product_councils WHERE council_id = $id ) AND p.name LIKE ?",[$keyword]);
            return $results;
        }else if($user->level == 2){
            $locationId = $user->address->province_id;
            $results = DB::select("SELECT p.id, p.name, p.code,p.image,e.name as entity_name  FROM entities e JOIN products p ON e.id = p.entity_id JOIN entity_addresses ea ON e.id = ea.entity_id WHERE ea.province_id = $locationId AND p.id NOT IN (SELECT product_id FROM product_councils WHERE council_id = $id) AND p.name LIKE ?",[$keyword]);
            return $results;
        }else{
            $results = DB::select("SELECT p.id, p.name, p.code,p.image,e.name as entity_name  FROM entities e JOIN products p ON e.id = p.entity_id JOIN entity_addresses ea ON e.id = ea.entity_id WHERE p.id NOT IN (SELECT product_id FROM product_councils WHERE council_id = $id) AND p.name LIKE ?",[$keyword]);
            return $results;
        }
    }

    public function getProductsByStatus($user, $status,$limit, $offset){
        if($offset <= 0){
            $offset == 1;
        }
        $start = ($limit * ($offset - 1));
        //Cấp Huyện
        if($user->level == 3){
            $locationId = $user->address->district_id;
            $results = DB::select("SELECT p.id, p.name, p.code,p.image, p.status,p.created_at, p.user_id,p.product_type,e.name as entity_name, 
            (SELECT COUNT(*) FROM total_marks WHERE product_id = p.id AND level = $user->level) as count_mark, 
            IFNULL((SELECT SUM(point)/COUNT(*) FROM total_marks WHERE product_id = p.id AND level = $user->level AND type = 1),0) as avg_point 
            FROM entities e JOIN products p ON e.id = p.entity_id JOIN entity_addresses ea ON e.id = ea.entity_id WHERE ea.district_id = $locationId AND p.status = ? LIMIT $limit OFFSET $start", [$status]);
            return $results;
        }else if($user->level == 2){
            $locationId = $user->address->province_id;
            $results = DB::select("SELECT p.id, p.name, p.code,p.image, p.status,p.created_at,p.user_id,p.product_type,e.name as entity_name, 
            (SELECT COUNT(*) FROM total_marks WHERE product_id = p.id AND level = $user->level) as count_mark, 
            IFNULL((SELECT SUM(point)/COUNT(*) FROM total_marks WHERE product_id = p.id AND level = $user->level AND type = 1),0) as avg_point  
            FROM entities e JOIN products p ON e.id = p.entity_id JOIN entity_addresses ea ON e.id = ea.entity_id WHERE ea.province_id = $locationId AND p.status = $status LIMIT $limit OFFSET $start");
            return $results;
        }else{
            $results = DB::select("SELECT p.id, p.name, p.code,p.image, p.status,p.created_at,p.user_id,p.product_type,e.name as entity_name, 
            (SELECT COUNT(*) FROM total_marks WHERE product_id = p.id AND level = $user->level) as count_mark, 
            IFNULL((SELECT SUM(point)/COUNT(*) FROM total_marks WHERE product_id = p.id AND level = $user->level AND type = 1),0) as avg_point 
            FROM entities e JOIN products p ON e.id = p.entity_id JOIN entity_addresses ea ON e.id = ea.entity_id WHERE p.status = $status LIMIT $limit OFFSET $start");
            return $results;
        }
    }

    public function getFileOfCouncilByUserId($user,$status,$limit, $offset){
        if($offset <= 0){
            $offset == 1;
        }
        $start = ($limit * ($offset - 1));

        $results = DB::select("SELECT p.id, p.name, p.code,p.image, p.status,p.created_at, p.user_id,p.product_type,(SELECT name FROM product_types WHERE id = p.product_type) as product_type_name,c.id as council_id,c.name as council_name,
        (SELECT COUNT(*) FROM total_marks WHERE product_id = p.id AND council_id = c.id) as count_mark,
        IFNULL((SELECT SUM(point)/COUNT(*) FROM total_marks WHERE product_id = p.id AND council_id = c.id),0) as avg_point,
        (SELECT name FROM entities WHERE id=p.entity_id) as entity_name   
        FROM councils c JOIN product_councils pc ON c.id = pc.council_id JOIN products p ON pc.product_id = p.id WHERE c.user_id = $user->id LIMIT $limit OFFSET $start");
        return $results;
    }

    public function filterFileOfCouncilByUserId($data){
        $user = $data->user;

        $query = DB::table("councils")
        ->selectRaw('products.id, products.name, products.code,products.image, products.status,products.created_at, products.user_id,products.product_type,(SELECT name FROM product_types WHERE id = p.product_type) as product_type_name,councils.id as council_id,councils.name as council_name,entity_addresses.province_id,entity_addresses.district_id, (SELECT COUNT(*) FROM total_marks WHERE total_marks.product_id = products.id AND total_marks.council_id = councils.id) as count_mark,IFNULL((SELECT SUM(total_marks.point)/COUNT(*) FROM total_marks WHERE total_marks.product_id = products.id AND total_marks.council_id = councils.id),0) as avg_point,(SELECT entities.name FROM entities WHERE entities.id = products.entity_id) as entity_name')
        ->join('product_councils','councils.id','=','product_councils.council_id')
        ->join('products','product_councils.product_id','=','products.id')
        ->join('entities','entities.id','=','products.entity_id')
        ->join('entity_addresses', "entities.id", "=", "entity_addresses.entity_id")
        ->where('councils.user_id',$user->id);
        //->groupBy('products.id');
        
        if (!empty($data->status) && $data->status != null && $data->status != 'ALL'){
            $query = $query->where("status", $data->status);
        }
        if (!empty($data->product) && $data->product != null){
            $productName = "%". $data->product . "%";
            $query = $query->where("name","like", $productName)->orWhere("code","like", $productName)->orWhere("entity_name", "like", $productName);
        }

        if (!empty($data->council) && $data->council != null && $data->council != 0){
            $query = $query->where("council_id", $data->council);
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
        if(!empty($data->ward) && $data->ward != null){
            $query = $query->whereIn("entity_addresses.ward_id", [$data->ward]);
        }
        $results = $query->get();

        return $results;
    }

    public function getProductByProductId($id){
        $results = DB::select("SELECT p.id, p.user_id, p.entity_id, p.product_type, p.name, p.code, p.image, p.status, p.created_at, e.name as entity_name,(SELECT pt.name FROM product_types pt WHERE pt.id = p.product_type) as product_type_name, ea.street, ea.ward, ea.district, ea.province FROM products p JOIN entities e ON p.entity_id = e.id JOIN entity_addresses ea ON e.id = ea.entity_id WHERE p.id = $id LIMIT 1");
        return $results[0];
    }

    public function getProductRankByProductId($productId){
        $results = DB::select("SELECT * FROM product_ranks WHERE product_id = ?",[$productId]);
        return $results;
    }

    public function getProofsByProductId($productId){
        return $results = DB::select("SELECT COUNT(*) as count FROM proof_information WHERE product_id = ? AND proof_id IN (1,2,3,4,5)",[$productId]);
    }
}
