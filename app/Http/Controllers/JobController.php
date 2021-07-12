<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Repository\IJobRepository;
use App\Repository\ICityRepository;
use App\Repository\ICompanyRepository;

class JobController extends Controller
{
    public $job;
    public $company;
    public $city;

    public function __construct(ICompanyRepository $company, ICityRepository $city, IJobRepository $job)
    {
        $this->job = $job;
        $this->company = $company;
        $this->city = $city;
    }

    public function showJob()
    {
        $jobs = $this->job->getAllJob();
        return View::make('admin.job.index', compact('jobs'));
    }

    public function createJob()
    {
        $city = $this->city->getAllCity();
        $company = $this->company->getAllCompany();
        return View::make('admin.job.create', compact('city', 'company'));
    }

    public function getJob($id)
    {
        $job = $this->job->getJobById($id);
        $city = $this->city->getCityById($id);
        $company = $this->company->getCompanyById($id);
        return View::make('admin.job.edit', compact('job', 'city', 'company'));
    }

    public function saveJob(Request $request, $id = null)
    {
        $collection = $request->except(['_token', '_method']);

        if (!is_null($id)) {
            $this->job->createOrUpdate($id, $collection);
        } else {
            $this->job->createOrUpdate($id = null, $collection);
        }

        return redirect()->route('job.show');
    }

    public function deleteJob($id)
    {
        $this->job->deleteJob($id);
        return redirect()->route('job.show');
    }

}
