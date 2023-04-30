<?php
namespace App\Repositories\Contracts;
interface BaseRepositoryInterface
{
    public function all($order);
    public function paginate($limit);
    public function find($id);
}