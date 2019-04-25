@extends('admin-panel.master')
@section('title')
    Edit Admin
@endsection
@section('body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Admin
                <small>form</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Edit admin</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <!-- Horizontal Form -->
                <div class="box box-info">

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

                <!-- form start -->
                    <form class="form-horizontal" action="{{ url('/admin/profile/update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group" hidden>
                                <label for="id" class="col-sm-2 control-label">ID</label>

                                <div class="col-sm-10">
                                    <input name="id" value="{{ $admin->id }}" type="text" class="form-control" id="id" placeholder="id">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>

                                <div class="col-sm-10">
                                    <input name="name" value="{{ $admin->name }}" type="text" class="form-control" id="name" placeholder="Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10">
                                    <input name="email" value="{{ $admin->email }}" type="email" class="form-control" id="email" placeholder="Email" readonly="readonly">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="old_pass" class="col-sm-2 control-label">Old Password</label>

                                <div class="col-sm-10">
                                    <input name="old_pass" type="password" class="form-control" id="old_pass" placeholder="Old Password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-sm-2 control-label">New Password</label>

                                <div class="col-sm-10">
                                    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="c_password" class="col-sm-2 control-label">Confirm Password</label>

                                <div class="col-sm-10">
                                    <input name="c_password" type="password" class="form-control" id="c_password" placeholder="Confirm Password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="col-sm-2 control-label">Phone</label>

                                <div class="col-sm-10">
                                    <input name="phone" value="{{ $admin->phone }}" type="text" class="form-control" id="phone" placeholder="Phone">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="stored-images" class="col-sm-2 control-label">Profile Picture</label>

                                <div class="col-sm-10">
                                    <img class="house_images" src="{{ asset($admin->image) }}" alt="House Images">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="image" class="col-sm-2 control-label">Image</label>

                                <div class="col-sm-10">
                                    <input name="image" type="file" class="form-control" id="image" placeholder="Image">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="status" class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-10">
                                    <select name="status" class="form-control" id="status" readonly="readonly">
                                        @if($admin->status == 'active')
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        @elseif($admin->status == 'inactive')
                                            <option value="inactive">Inactive</option>
                                            <option value="active">Active</option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info pull-right">Save</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->

            </div>
            <!-- /.row -->
        </section>
    </div>
@endsection
