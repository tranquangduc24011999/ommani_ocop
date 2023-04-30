<?php
namespace App\Repositories\Contracts;

interface EntityRepositoryInterface extends BaseRepositoryInterface
{
    public function getEntitiesByUserId($userId);
    public function getEntity($userId, $entityId);
    public function getEntity2($userId, $entityId);
}