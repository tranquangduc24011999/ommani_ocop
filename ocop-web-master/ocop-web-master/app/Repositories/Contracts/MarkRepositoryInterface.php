<?php
namespace App\Repositories\Contracts;

interface MarkRepositoryInterface extends BaseRepositoryInterface
{
   public function getTotalMarkByProductIdAndUserId($productId, $userId);
   public function getCountMarkProductByProductIdAndLevel($productId, $level);
}