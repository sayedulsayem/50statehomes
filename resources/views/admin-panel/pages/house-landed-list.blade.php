@extends('admin-panel.master')
@section('title')
    House Landed List
@endsection
@section('body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                House Landed List
                <small>table</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">house landed list</li>
            </ol>
        </section>
        <!-- Main content -->
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

                 @foreach($data as $value)
                        <div class="col-md-3">
                            <div class="polaroid">
                                <img src="{{ $value->image ? asset($value->image) : '' }}" alt="Norway" style="width:100%">
                                <div class="text-house-box">
                                    <p class="house-adr">{{ $value->street }} <span>{{ $value->city }} </span><span>{{ $value->state }} </span><span>{{ $value->zip }} </span></p>
                                    <p class="house-price">Price : {{ $value->price }}</p>
                                    <p class="house_bed">Bed: {{ $value->bed }}</p>
                                    <p class="house_bed">Status: {{ $value->status }}</p>
                                    <a class="btn btn-primary" href="{{ url('/landing-house/'.$value->street.'/'.$value->id) }}">View Details</a>
                                    <a class="btn btn-warning" href="{{ url('/admin/landing-house/edit/'.$value->id) }}">Edit</a>
                                    <a class="btn btn-danger" href="{{ url('/admin/house/delete/'.$value->id) }}">Delete</a>
                                    <input type="text" value="{{ url('/landing-house/'.$value->street.'/'.$value->id) }}">
                                </div>
                            </div>
                        </div>
                     @endforeach
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
