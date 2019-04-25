@extends('admin-panel.master')
@section('title')
    Users List
@endsection
@section('body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Users List
                <small>table</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">users list</li>
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
                @if(isset($users))
                    @foreach($users as $user)
                        <div class="col-md-3">
                            <div class="box box-widget widget-user">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header bg-aqua-active">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <h3 class="widget-user-username">{{ $user->name }}</h3>
                                            <h5 class="widget-user-desc">{{ $user->email }}</h5>
                                        </div>
                                        <div class="col-md-5">
                                            <h5 class="widget-user-join-date">Join: {{ date_format($user->created_at,'m/d/Y') }}</h5>
                                            <h5 class="widget-user-phone">Phone: {{ $user->phone }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-user-image">
                                    <img class="img-circle" src="{{ asset($user->image) }}" alt="User Avatar">
                                </div>
                                <div class="box-footer">
                                    <div class="row">
                                        <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                                <a class="btn btn-primary" href="{{ url('/admin/users/profile/edit/'.$user->id) }}">Impersonate</a>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                                <a class="btn btn-warning" href="{{ url('/admin/users/change-status/'.$user->id) }}">Disable</a>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4">
                                            <div class="description-block">
                                                <a class="btn btn-danger" href="{{ url('/admin/users/delete/'.$user->id) }}">Delete</a>
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
                    @else
                    <div class="alert alert-danger" role="alert">No User Data Found.</div>
                @endif

            </div>
            <!-- /.row -->
        </section>
    </div>
@endsection
