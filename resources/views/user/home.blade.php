@extends('user/app')

@section('bg-img',asset('user/img/about-bg.jpg'))
@section('title','Job Portal')


@section('main-content')
    <form action="{{route('home')}}" method="post">
        @csrf
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-info">Find Job</h4>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td class="text-primary w-25">
                                    City
                                </td>
                                <td class="text-primary w25">
                                    Job
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <select name="city_id" class="form-control form-control-lg w-100 border-none"
                                            required>
                                        @foreach($city as $cities)
                                            <option value="{{$cities->id}}">{{$cities->name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="">
                                    <select name="job_name" class="form-control form-control-lg w-100 border-none"
                                            required>
                                        @foreach(\App\Models\Job::where("city_id",$cities->id)->get() as $jobs)
                                            <option value="{{$jobs->city_id}}">{{$jobs->job_name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <a class="btn btn-info" href="/jobShow/{{ $jobs->id }}"
                           style="font-size: 15px;padding: 5px;border-radius: 5px">More..</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
