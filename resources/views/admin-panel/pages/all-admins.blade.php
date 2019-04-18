@extends('admin-panel.master')
@section('title')
    All Admin List
    @endsection
@section('body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                All Admin
                <small>list</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">show all admin</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">

                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif

                @foreach($getAllAdmin as $data)
                    <div class="col-md-4">
                        <div class="box box-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-aqua-active">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h3 class="widget-user-username">{{ $data->name }}</h3>
                                        <h5 class="widget-user-desc">{{ $data->email }}</h5>
                                    </div>
                                    <div class="col-md-5">
                                        <h5 class="widget-user-join-date">Join: {{ date_format($data->created_at,'d-M-Y') }}</h5>
                                        <h5 class="widget-user-phone">Phone: {{ $data->phone }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-user-image">
                                <img class="img-circle" src="{{ asset($data->image) }}" alt="User Avatar">
                            </div>
                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <a class="btn btn-primary" href="{{ url('/admin/profile/edit/'.$data->id) }}">Impersonate</a>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <a class="btn btn-warning" href="{{ url('/admin/change-status/'.$data->id) }}">Disable</a>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <a class="btn btn-danger" href="{{ url('/admin/delete/'.$data->id) }}">Delete</a>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- /.row -->
        </section>
    </div>
    @endsection
