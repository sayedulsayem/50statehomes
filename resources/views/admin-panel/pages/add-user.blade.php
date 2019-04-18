@extends('admin-panel.master')
@section('title')
    Add User
@endsection
@section('body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Add New Admin
                <small>form</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Add admin</li>
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
                    <form class="form-horizontal" action="{{ url('/admin/add-new-admin') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>

                                <div class="col-sm-10">
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10">
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-sm-2 control-label">Password</label>

                                <div class="col-sm-10">
                                    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="col-sm-2 control-label">Phone</label>

                                <div class="col-sm-10">
                                    <input name="phone" type="text" class="form-control" id="phone" placeholder="Phone">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="image" class="col-sm-2 control-label">Image</label>

                                <div class="col-sm-10">
                                    <input name="image" type="file" class="form-control" id="image" placeholder="Image">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-10">
                                    <select name="status" class="form-control" id="status">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
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
