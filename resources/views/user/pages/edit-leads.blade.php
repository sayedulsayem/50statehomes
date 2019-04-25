
@extends('admin-panel.master')
@section('title')
    Edit Leads House
@endsection
@section('body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Leads House
                <small>form</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Edit Leads House</li>
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
                    <form class="form-horizontal" action="{{ url('/admin/leads/update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">

                            @foreach($leadById as $leadById)
                                @break
                                @endforeach

                            <div class="form-group" hidden="hidden">
                                <label for="lead_id" class="col-sm-2 control-label">Leads Id</label>
                                <div class="col-sm-10">
                                    <input name="lead_id" type="number" value="{{ $leadById->lead_id }}" class="form-control" id="lead_id" placeholder="lead_id">
                                </div>
                            </div>
                            <div class="form-group" hidden="hidden">
                                <label for="house_id" class="col-sm-2 control-label">House Id</label>
                                <div class="col-sm-10">
                                    <input name="house_id" type="number" value="{{ $leadById->house_id }}" class="form-control" id="house_id" placeholder="house_id">
                                </div>
                            </div>
                            <div class="form-group" hidden="hidden">
                                <label for="user_id" class="col-sm-2 control-label">House Id</label>
                                <div class="col-sm-10">
                                    <input name="user_id" type="number" value="{{ $leadById->user_id }}" class="form-control" id="user_id" placeholder="user_id">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>

                                <div class="col-sm-10">
                                    <input name="name" type="text" value="{{ $leadById->name }}" class="form-control" id="name" placeholder="name" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10">
                                    <input name="email" type="text" value="{{ $leadById->email }}" class="form-control" id="email" placeholder="email" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-sm-2 control-label">Phone</label>

                                <div class="col-sm-10">
                                    <input name="phone" type="text" value="{{ $leadById->phone }}" class="form-control" id="phone" placeholder="phone" readonly="readonly">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="street" class="col-sm-2 control-label">Street</label>

                                <div class="col-sm-10">
                                    <input name="street" type="text" value="{{ $leadById->street }}" class="form-control" id="street" placeholder="Street" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city" class="col-sm-2 control-label">City</label>

                                <div class="col-sm-10">
                                    <input name="city" type="text" value="{{ $leadById->city }}" class="form-control" id="city" placeholder="City" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="state" class="col-sm-2 control-label">State</label>

                                <div class="col-sm-10">
                                    <input name="state" type="text" value="{{ $leadById->state }}" class="form-control" id="state" placeholder="State" readonly="readonly">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="zip" class="col-sm-2 control-label">Zip</label>

                                <div class="col-sm-10">
                                    <input name="zip" type="text" value="{{ $leadById->zip }}" class="form-control" id="zip" placeholder="Zip" readonly="readonly">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="offer_price" class="col-sm-2 control-label">Offer Price</label>

                                <div class="col-sm-10">
                                    <input name="offer_price" type="text" value="{{ $leadById->offer_price }}" class="form-control" id="offer_price" placeholder="offer_price">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="appoint_date" class="col-sm-2 control-label">Appoint Date</label>

                                <div class="col-sm-10">
                                    <input name="appoint_date" type="date" value="{{ $leadById->appoint_date }}" class="form-control" id="appoint_date" placeholder="appoint_date">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="appoint_time" class="col-sm-2 control-label">Appoint Time</label>

                                <div class="col-sm-10">
                                    <input name="appoint_time" type="time" value="{{ $leadById->appoint_time }}" class="form-control" id="appoint_time" placeholder="appoint_time">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="comment" class="col-sm-2 control-label">Comment</label>

                                <div class="col-sm-10">
                                    <textarea name="comment" class="form-control" id="comment" rows="10">{{ $leadById->comment }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="buying_plan" class="col-sm-2 control-label">Buying Plan</label>
                                <div class="col-sm-10">
                                    <select name="buying_plan" class="form-control" id="buying_plan">
                                        @if($leadById->buying_plan == 'cash')
                                            <option value="cash">Cash</option>
                                            <option value="loan">Loan</option>
                                        @elseif($leadById->buying_plan == 'loan')
                                            <option value="loan">Loan</option>
                                            <option value="cash">Cash</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="toured" class="col-sm-2 control-label">Toured</label>
                                <div class="col-sm-10">
                                    <select name="toured" class="form-control" id="toured">
                                        @if($leadById->toured == 'yes')
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        @elseif($leadById->toured == 'no')
                                            <option value="no">No</option>
                                            <option value="yes">Yes</option>
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
