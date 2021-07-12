<?php


namespace App\Repository;


interface ICityRepository
{
    public function getAllCity();

    public function getCityById($id);

    public function createOrUpdate($id = null, $collection = []);

    public function deleteCity($id);
}
