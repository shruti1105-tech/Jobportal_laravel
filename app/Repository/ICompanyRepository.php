<?php


namespace App\Repository;


interface ICompanyRepository
{
    public function getAllCompany();

    public function getCompanyById($id);

    public function createOrUpdate($id = null, $collection = []);

    public function deleteCompany($id);
}
