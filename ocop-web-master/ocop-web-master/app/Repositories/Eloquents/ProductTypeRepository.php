<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\ProductTypeRepositoryInterface;
use App\Models\ProductType;

class ProductTypeRepository implements ProductTypeRepositoryInterface
{
    public function all($order)
    {
        if (!IsNullOrEmptyString($order)) {
            return ProductType::whereRaw('status=1 AND visibility=1')->orderBy('id', 'DESC')->get();
        } else {
            return ProductType::whereRaw('status=1 AND visibility=1')->get();
        }

    }

    public function paginate($limit){
        return ProductType::where('status',1)->orderBy('id', 'DESC')->paginate($limit);
    }

    public function find($id)
    {
        return ProductType::find($id);
    }

    public function getProductsByEntityId($entityId, $userId){

    }
}
