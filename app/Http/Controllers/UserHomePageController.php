<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Repository\ICityRepository;
use App\Repository\IJobRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserHomePageController extends Controller
{
    public $city;
    public $job;

    public function __construct(IJobRepository $job, ICityRepository $city)
    {
        $this->job = $job;
        $this->city = $city;
    }

    public function getCityJob(Request $request)
    {
        $city = $this->city->getAllCity();
//        $query =$request->except(['_token']);
//        $jobs = $this->job->getJob($query);
        $jobs=$this->job->getJob();
        return View::make('user.home', compact('city', 'jobs'));
    }

    public function getJob($id)
    {
        $jobs = $this->job->getJobById($id);
        return View::make('user.showJobDetails', compact('jobs'));
    }


}
