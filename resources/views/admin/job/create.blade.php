@extends('admin/layouts/app')
@section('headSection')
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
@endsection

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 style="font-size: 24px">
                Create Job
            </h1>

        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-12" style="font-size: 15px">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title" style="font-size: 18px;padding: 5px">Job</h3>
                        </div>

                        @if(count($errors) >0)
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif
                        @if (session()->has('message'))
                            <p class="alert-default-success">{{session('message')}}</p>
                        @endif

                        <form role="form" action="{{route('job.store')}}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="job_name">Job Name</label>
                                    <input type="text" class="form-control" style="font-size: 15px;height: 35px"
                                           id="job_name" name="job_name" placeholder="Job Name">
                                </div>
                                <div class="form-group">
                                    <label for="company_id">Company</label>
                                    <select name="company_id" class="form-control form-control-lg w-100 border-none"
                                            required>
                                        @foreach($company as $companies)
                                            <option
                                                value="{{$companies->id }}">{{$companies->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="city_id">City</label>
                                    <select name="city_id" class="form-control form-control-lg w-100 border-none"
                                            required>
                                        @foreach($city as $cities)
                                            <option
                                                value="{{$cities->id }}">{{$cities->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="description">Job Description</label>
                                    <input type="text" class="form-control" style="font-size: 15px;height: 35px"
                                           id="description" name="description" placeholder="Job Description">
                                </div>
                                <div class="form-group">
                                    <label for="position">Job Position</label>
                                    <input type="text" class="form-control" style="font-size: 15px;height: 35px"
                                           id="position" name="position" placeholder="Job Position">
                                </div>
                                <div class="form-group">
                                    <label for="type">Job Type</label>
                                    <input type="text" class="form-control" style="font-size: 15px;height: 35px"
                                           id="type" name="type" placeholder="Job Type">
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" style="font-size: 18px">Submit
                                    </button>
                                    <a type="button" href="{{ route('job.show') }}" class="btn btn-warning"
                                       style="font-size: 18px">Back</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('footerSection')
    <script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $(".select2").select2();
        });

    </script>
@endsection

