<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\EntityRepositoryInterface;
use App\Models\Entity;

class EntityRepository implements EntityRepositoryInterface
{
    public function all($order)
    {
        if(!IsNullOrEmptyString($order)){
            return Entity::orderBy('id', 'DESC')->get();
        }else{
            return Entity::all();
        }
        
    }

    public function paginate($limit){
        return Entity::orderBy('id', 'DESC')->paginate($limit);
    }

    public function find($id)
    {
        return Entity::find($id);
    }

    public function getEntitiesByUserId($userId){
        return Entity::where('user_id',$userId)->leftJoin('entity_addresses','entities.id','=','entity_addresses.entity_id')->get();
    }

    public function getEntity($userId, $entityId){
        return Entity::where(['entities.id'=>$entityId, 'entities.user_id'=>$userId])->leftJoin('entity_addresses','entities.id','=','entity_addresses.entity_id')->first();
    }

    public function getEntity2($userId, $entityId){
        return Entity::where(['entities.id'=>$entityId, 'entities.user_id'=>$userId])->first();
    }
}