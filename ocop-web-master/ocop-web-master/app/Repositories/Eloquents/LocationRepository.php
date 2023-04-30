<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\LocationRepositoryInterface;
use App\Models\Province;
use App\Models\District;
use App\Models\Ward;

class LocationRepository implements LocationRepositoryInterface
{
    public function all($order)
    {
        if(!IsNullOrEmptyString($order)){
            return Province::orderBy('id', 'DESC')->get();
        }else{
            return Province::all();
        }
        
    }

    public function paginate($limit){
        return Province::orderBy('id', 'DESC')->paginate($limit);
    }

    public function find($id)
    {
        return Province::find($id);
    }

    public function getDistrictByProvince($province){
        return District::where('province_id',$province)->get();
    }

    public function getWardByDistrict($district){
        return Ward::where('district_id',$district)->get();
    }

    public function getDistrict($id){
        return District::find($id);
    }

    public function getWard($id){
        return Ward::find($id);
    }
}