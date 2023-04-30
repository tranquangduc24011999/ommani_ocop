<?php
namespace App\Repositories\Contracts;

interface LocationRepositoryInterface extends BaseRepositoryInterface
{
    public function getDistrictByProvince($province);
    public function getWardByDistrict($district);
    public function getDistrict($id);
    public function getWard($id);
}