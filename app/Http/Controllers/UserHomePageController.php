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

    public function getCityJob()
    {
        $city = $this->city->getAllCity();
        $jobs = $this->job->getJob();
        return View::make('user.home', compact('city', 'jobs'));
    }

    public function getJob($id)
    {
        $job = $this->job->getJobById($id);
        return View::make('user.showJobDetails', compact($job));
    }


}
