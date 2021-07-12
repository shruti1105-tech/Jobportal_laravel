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
                    <p>{{ $job->job_name }}</p>
                    <p>{{ $job->description }}</p>
                    <p>{{ $job->position }}</p>
                    <p>{{ $job->type }}</p>
                    <p>{{ $job->company_id }}</p>
                    <a href="/jobApply/{{ $job->id }}" class="btn btn-primary"
                       style="float: right;margin-right: 100px;border-radius: 5px;padding: 15px">Apply</a>
                </div>
            </div>
        </div>
    </div>
@endsection
