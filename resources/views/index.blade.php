@extends('front.master')
@section('title')
    home
    @endsection
@section('body')
    <div class="container">
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
                    <div class="col-md-4 col-sm-6">
                        <div class="polaroid">
                            <img src="{{ $value->image ? asset($value->image) : '' }}" alt="Norway" style="width:100%">
                            <div class="text-house-box">
                                <p class="house-adr">{{ $value->street }} <span>{{ $value->city }} </span><span>{{ $value->state }} </span><span>{{ $value->zip }} </span></p>
                                <p class="house-price">Price : {{ $value->price }}</p>
                                <p class="house_bed">Bed: {{ $value->bed }}</p>
                                <a class="btn btn-primary" href="{{ url('/landing-house/'.$value->street.'/'.$value->id) }}">View Details</a>
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
