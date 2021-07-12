<?php


namespace App\Repository;


use App\Models\Job;

class JobRepository implements IJobRepository
{

    public function getAllJob()
    {
        return Job::all();
    }

    public function getJobById($id)
    {
        return Job::find($id);
    }

    public function createOrUpdate($id = null, $collection = [])
    {
        if (is_null($id)) {
            $job = new Job();
            $job->job_name = $collection['job_name'];
            $job->city_id = $collection['city_id'];
            $job->company_id = $collection['company_id'];
            $job->description = $collection['description'];
            $job->position = $collection['position'];
            $job->type = $collection['type'];
            return $job->save();
        }
        $job = Job::find($id);
        $job->job_name = $collection['job_name'];
//        $job->city_id = $collection['city_id'];
//        $job->company_id = $collection['company_id'];
        $job->description = $collection['description'];
        $job->position = $collection['position'];
        $job->type = $collection['type'];
        return $job->save();
    }

    public function deleteJob($id)
    {
        return Job::find($id)->delete();
    }

    public function getJob()
    {
        return Job::with('cities')->where('city_id',1)->get();
    }
}
