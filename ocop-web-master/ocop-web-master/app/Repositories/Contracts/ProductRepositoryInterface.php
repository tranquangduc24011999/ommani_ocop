<?php
namespace App\Repositories\Contracts;

interface ProductRepositoryInterface extends BaseRepositoryInterface
{
    public function getProductById($id);

    public function getProductByLevel($user);

    public function getProductByLevelPaging($user, $limit, $offset);

    public function getFilterProduct($data);

    public function getProductsByCouncil($id);

    public function getProductsOtherByCouncil($user, $id);

    public function searchProductsOtherByCouncil($user, $id, $keyword);

    public function getProductsByStatus($user, $status,$limit, $offset);

    public function getProductByProductId($id); //v2

    public function getFileOfCouncilByUserId($user,$pstatus,$limit, $offset);

    public function getProductRankByProductId($productId);

    public function getProofsByProductId($productId);
}
