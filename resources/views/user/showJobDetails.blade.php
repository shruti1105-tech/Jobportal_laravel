@extends('user/app')

@section('bg-img',asset('user/img/about-bg.jpg'))
@section('title','Job Portal')


@section('main-content')
    <div class="col-12">
        <div class="card bg-light">
            <div class="card-body">
                <div class="table-responsive">
                    <a href="/home" class="btn btn-primary"
                       style="float: right;margin-right: 100px;border-radius: 5px;padding: 15px">Back</a>
                    <p>Job Name:- {{ $jobs->job_name }}</p>
                     <p>Description:- {{ $jobs->description }}</p>
                    <p>Position:- {{ $jobs->position }}</p>
                    <p>Type:- {{ $jobs->type }}</p>
                    <p>Company_Name:- {{ $jobs->city_id }}</p>
                    <a href="/jobApply/{{ $jobs->id }}" class="btn btn-primary"
                       style="float: right;margin-right: 100px;border-radius: 5px;padding: 15px">Apply</a>
                </div>
            </div>
        </div>
    </div>
@endsection
