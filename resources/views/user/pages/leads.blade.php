@extends('admin-panel.master')
@section('title')
    Leads List
@endsection
@section('body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Leads List
                <small>table</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">leads list</li>
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
                            <img src="{{ asset($value->image) }}" alt="Norway" style="width:100%">
                            <div class="text-house-box">
                                <p class="house-adr">{{ $value->street }} <span>{{ $value->city }} </span><span>{{ $value->state }} </span><span>{{ $value->zip }} </span></p>
                                <p class="house-price">Price : {{ $value->price }}</p>
                                <p class="house_bed">Bed: {{ $value->bed }}</p>
                                <a class="btn btn-primary" href="{{ url('/admin/leads-house/'.$value->street.'/'.$value->id) }}">View Leads</a>
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
