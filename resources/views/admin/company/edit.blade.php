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
                Edit Company
            </h1>

        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-12" style="font-size: 15px">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title" style="font-size: 18px;padding: 5px">Company</h3>
                        </div>

                        @if(count($errors) >0)
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif
                        @if (session()->has('message'))
                            <p class="alert-default-success">{{session('message')}}</p>
                        @endif

                        <form role="form" action="{{route('company.update', $company->id)}}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Company Name</label>
                                    <input type="text" class="form-control" style="font-size: 15px;height: 35px"
                                           id="name" name="name" placeholder="Company Name" value="{{ $company->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="phone_no">Phone No</label>
                                    <input type="text" class="form-control" style="font-size: 15px;height: 35px"
                                           id="phone_no" name="phone_no" placeholder="Phone No" value="{{ $company->phone_no }}">
                                </div>
                                <div class="form-group">
                                    <label for="website">Company Website</label>
                                    <input type="text" class="form-control" style="font-size: 15px;height: 35px"
                                           id="website" name="website" placeholder="Company Website" value="{{ $company->website }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Company Description</label>
                                    <input type="text" class="form-control" style="font-size: 15px;height: 35px"
                                           id="description" name="description" placeholder="Company Description" value="{{ $company->description }}">
                                </div>
{{--                                <div class="form-group">--}}
{{--                                    <label for="category_id">City</label>--}}
{{--                                    <select name="category_id" class="form-control form-control-lg w-100 border-none"--}}
{{--                                            required>--}}
{{--                                        <option value="{{$company->name }}">{{$company->city_id}}</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" style="font-size: 18px">Submit
                                    </button>
                                    <a type="button" href="{{ route('company.show') }}" class="btn btn-warning"
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

