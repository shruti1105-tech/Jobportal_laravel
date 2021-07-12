<?php


namespace App\Repository;


use App\Models\City;
use App\Models\Job;

class HomePageRepository implements IHomePageRepository
{

    public function getAllCity()
    {
        return City::all();
    }


    public function getJob()
    {
        return Job::where('job_name')->get();
    }

    public function getCity()
    {
        return City::where('name')->get();
    }
}
