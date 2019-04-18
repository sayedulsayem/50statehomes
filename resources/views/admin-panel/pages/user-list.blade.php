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
                <div class="col-md-3">
                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-aqua-active">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3 class="widget-user-username">Alexander Pierce</h3>
                                    <h5 class="widget-user-desc">sayedulsayem@gmail.com</h5>
                                </div>
                                <div class="col-md-5">
                                    <h5 class="widget-user-join-date">Join: 03-apr-2019</h5>
                                    <h5 class="widget-user-phone">Phone: 15421545</h5>
                                </div>
                            </div>
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle" src="{{ asset('/panel') }}/dist/img/user1-128x128.jpg" alt="User Avatar">
                        </div>
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <a class="btn btn-primary" href="#">Impersonate</a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <a class="btn btn-warning" href="#">Disable</a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4">
                                    <div class="description-block">
                                        <a class="btn btn-danger" href="#">Delete</a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-aqua-active">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3 class="widget-user-username">Alexander Pierce</h3>
                                    <h5 class="widget-user-desc">sayedulsayem@gmail.com</h5>
                                </div>
                                <div class="col-md-5">
                                    <h5 class="widget-user-join-date">Join: 03-apr-2019</h5>
                                    <h5 class="widget-user-phone">Phone: 15421545</h5>
                                </div>
                            </div>
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle" src="{{ asset('/panel') }}/dist/img/user1-128x128.jpg" alt="User Avatar">
                        </div>
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <a class="btn btn-primary" href="#">Impersonate</a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <a class="btn btn-warning" href="#">Disable</a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4">
                                    <div class="description-block">
                                        <a class="btn btn-danger" href="#">Delete</a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-aqua-active">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3 class="widget-user-username">Alexander Pierce</h3>
                                    <h5 class="widget-user-desc">sayedulsayem@gmail.com</h5>
                                </div>
                                <div class="col-md-5">
                                    <h5 class="widget-user-join-date">Join: 03-apr-2019</h5>
                                    <h5 class="widget-user-phone">Phone: 15421545</h5>
                                </div>
                            </div>
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle" src="{{ asset('/panel') }}/dist/img/user1-128x128.jpg" alt="User Avatar">
                        </div>
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <a class="btn btn-primary" href="#">Impersonate</a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <a class="btn btn-warning" href="#">Disable</a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4">
                                    <div class="description-block">
                                        <a class="btn btn-danger" href="#">Delete</a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-aqua-active">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3 class="widget-user-username">Alexander Pierce</h3>
                                    <h5 class="widget-user-desc">sayedulsayem@gmail.com</h5>
                                </div>
                                <div class="col-md-5">
                                    <h5 class="widget-user-join-date">Join: 03-apr-2019</h5>
                                    <h5 class="widget-user-phone">Phone: 15421545</h5>
                                </div>
                            </div>
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle" src="{{ asset('/panel') }}/dist/img/user1-128x128.jpg" alt="User Avatar">
                        </div>
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <a class="btn btn-primary" href="#">Impersonate</a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <a class="btn btn-warning" href="#">Disable</a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4">
                                    <div class="description-block">
                                        <a class="btn btn-danger" href="#">Delete</a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-aqua-active">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3 class="widget-user-username">Alexander Pierce</h3>
                                    <h5 class="widget-user-desc">sayedulsayem@gmail.com</h5>
                                </div>
                                <div class="col-md-5">
                                    <h5 class="widget-user-join-date">Join: 03-apr-2019</h5>
                                    <h5 class="widget-user-phone">Phone: 15421545</h5>
                                </div>
                            </div>
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle" src="{{ asset('/panel') }}/dist/img/user1-128x128.jpg" alt="User Avatar">
                        </div>
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <a class="btn btn-primary" href="#">Impersonate</a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <a class="btn btn-warning" href="#">Disable</a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4">
                                    <div class="description-block">
                                        <a class="btn btn-danger" href="#">Delete</a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-aqua-active">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3 class="widget-user-username">Alexander Pierce</h3>
                                    <h5 class="widget-user-desc">sayedulsayem@gmail.com</h5>
                                </div>
                                <div class="col-md-5">
                                    <h5 class="widget-user-join-date">Join: 03-apr-2019</h5>
                                    <h5 class="widget-user-phone">Phone: 15421545</h5>
                                </div>
                            </div>
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle" src="{{ asset('/panel') }}/dist/img/user1-128x128.jpg" alt="User Avatar">
                        </div>
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <a class="btn btn-primary" href="#">Impersonate</a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <a class="btn btn-warning" href="#">Disable</a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4">
                                    <div class="description-block">
                                        <a class="btn btn-danger" href="#">Delete</a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-aqua-active">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3 class="widget-user-username">Alexander Pierce</h3>
                                    <h5 class="widget-user-desc">sayedulsayem@gmail.com</h5>
                                </div>
                                <div class="col-md-5">
                                    <h5 class="widget-user-join-date">Join: 03-apr-2019</h5>
                                    <h5 class="widget-user-phone">Phone: 15421545</h5>
                                </div>
                            </div>
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle" src="{{ asset('/panel') }}/dist/img/user1-128x128.jpg" alt="User Avatar">
                        </div>
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <a class="btn btn-primary" href="#">Impersonate</a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <a class="btn btn-warning" href="#">Disable</a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4">
                                    <div class="description-block">
                                        <a class="btn btn-danger" href="#">Delete</a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-aqua-active">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3 class="widget-user-username">Alexander Pierce</h3>
                                    <h5 class="widget-user-desc">sayedulsayem@gmail.com</h5>
                                </div>
                                <div class="col-md-5">
                                    <h5 class="widget-user-join-date">Join: 03-apr-2019</h5>
                                    <h5 class="widget-user-phone">Phone: 15421545</h5>
                                </div>
                            </div>
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle" src="{{ asset('/panel') }}/dist/img/user1-128x128.jpg" alt="User Avatar">
                        </div>
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <a class="btn btn-primary" href="#">Impersonate</a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <a class="btn btn-warning" href="#">Disable</a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4">
                                    <div class="description-block">
                                        <a class="btn btn-danger" href="#">Delete</a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.row -->
        </section>
    </div>
@endsection
