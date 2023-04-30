<?php
namespace App\Repositories\Contracts;

interface EvaluationRepositoryInterface extends BaseRepositoryInterface
{
    public function getProductsEvaluation($user);
    public function filterProductsEvaluation($data);
    public function getMembersMarkedByProductId($productId,$councilId, $level);
    public function getProductHelpTeam($user, $limit, $offset);
}