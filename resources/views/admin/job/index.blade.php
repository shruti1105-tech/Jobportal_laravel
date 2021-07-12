@extends('admin/layouts/app')
@section('headSection')
    <link rel="stylesheet" href="{{asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css") }}">

    <link rel="stylesheet" href="{{asset("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") }}">
    <link rel="stylesheet" href="{{asset("plugins/datatables-responsive/css/responsive.bootstrap4.min.css") }}">
    <link rel="stylesheet" href="{{asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css") }}">


    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

@endsection
@section('main-content')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-sm-6">
                        <ol class="breadcrumb ">
                            <li class="breadcrumb-item" style="font-size: 25px"><a href="#">Job Details</a></li>

                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <a class='col-lg-offset-5 btn btn-success' href="{{route('job.create')}}" style="font-size: 15px;border-radius: 10px"> Add New Job</a>
                    </div>

                </div>
                <div class="card-body">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr style="font-size: 15px">
                                    <th>Sr. No</th>
                                    <th>Job Name</th>
                                    <th>Company Name</th>
                                    <th>City Name</th>
                                    <th>Description</th>
                                    <th>Position</th>
                                    <th>Type</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($jobs as $job)
                                    <tr>
                                        <td style="font-size: 14px">{{$loop->index +1}}</td>
                                        <td style="font-size: 14px">{{$job->job_name}}</td>
                                        <td style="font-size: 14px">{{$job->company_id}}</td>
                                        <td style="font-size: 14px">{{$job->city_id}}</td>
                                        <td style="font-size: 14px">{{$job->description}}</td>
                                        <td style="font-size: 14px">{{$job->position}}</td>
                                        <td style="font-size: 14px">{{$job->type}}</td>

                                        <td>
                                            <a href="{{ route('job.edit',$job->id) }}">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('job.delete',$job->id) }}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    Footer
                </div>
            </div>

        </section>
    </div>
@endsection
