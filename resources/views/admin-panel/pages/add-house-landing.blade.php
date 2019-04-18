@extends('admin-panel.master')
@section('title')
    Add House Landing
@endsection
@section('body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Add House Landing
                <small>form</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Add House Landing</li>
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
                    <form class="form-horizontal" action="{{ url('/admin/store-house-landing') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="street" class="col-sm-2 control-label">Street</label>

                                <div class="col-sm-10">
                                    <input name="street" type="text" class="form-control" id="street" placeholder="Street">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="city" class="col-sm-2 control-label">City</label>

                                <div class="col-sm-10">
                                    <input name="city" type="text" class="form-control" id="city" placeholder="City">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="state" class="col-sm-2 control-label">State</label>

                                <div class="col-sm-10">
                                    <input name="state" type="text" class="form-control" id="state" placeholder="State">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="zip" class="col-sm-2 control-label">Zip</label>

                                <div class="col-sm-10">
                                    <input name="zip" type="text" class="form-control" id="zip" placeholder="Zip">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="price" class="col-sm-2 control-label">Price</label>

                                <div class="col-sm-10">
                                    <input name="price" type="text" class="form-control" id="price" placeholder="Price">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="bed" class="col-sm-2 control-label">Bed</label>

                                <div class="col-sm-10">
                                    <input name="bed" type="text" class="form-control" id="bed" placeholder="Bed">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="bath" class="col-sm-2 control-label">Bath</label>

                                <div class="col-sm-10">
                                    <input name="bath" type="text" class="form-control" id="bath" placeholder="Bath">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="image" class="col-sm-2 control-label">Image</label>

                                <div class="col-sm-10">
                                    <input name="image[]" type="file" class="form-control" id="image" placeholder="Image" multiple>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="status" class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-10">
                                    <select name="status" class="form-control" id="status">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">Property Description</label>

                                <div class="col-sm-10">
                                    <textarea name="description" class="form-control" id="description" placeholder="Property Description" rows="10"></textarea>
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
