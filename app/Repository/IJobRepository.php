<?php


namespace App\Repository;


interface IJobRepository
{
    public function getAllJob();

    public function getJobById($id);

    public function getJob();

    public function createOrUpdate($id = null, $collection = []);

    public function deleteJob($id);

    public function index();
}
