<?php


namespace App\Repository;


use App\Models\City;
use App\Models\Job;
use Illuminate\Bus\DatabaseBatchRepository;
use Illuminate\Support\Facades\DB;

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
//        return Job::with('cities')->where('city_id',1)->get();
//        $query=$query['job_name'];
//        $job=Job::where("job_name","LIKE","%{$query}%")->get();
//        return compact('job');

        $job=City::select('cities.*')
            ->join('jobs','jobs.city_id','=','cities.id')
            ->get();
        return compact('job');
    }

//    public function index()
//    {
//        $job=DB::table('jobs')->select('job_name')->distinct()->get()->pluck('job_name');
//        $city=DB::table('jobs')->select('city_id')->distinct()->get()->pluck('city_id');
//    }
}
