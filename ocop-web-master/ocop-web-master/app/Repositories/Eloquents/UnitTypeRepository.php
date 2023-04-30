<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\UnitTypeRepositoryInterface;
use App\Models\UnitType;

class UnitTypeRepository implements UnitTypeRepositoryInterface
{
    public function all($order)
    {
        if(!IsNullOrEmptyString($order)){
            return UnitType::orderBy('id', 'DESC')->get();
        }else{
            return UnitType::all();
        }
        
    }

    public function paginate($limit){
        return UnitType::orderBy('id', 'DESC')->paginate($limit);
    }

    public function find($id)
    {
        return UnitType::find($id);
    }
}