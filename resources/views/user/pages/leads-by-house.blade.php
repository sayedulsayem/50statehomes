@extends('user.master')
@section('title')
    Leads by House
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

                    <div class="box">
                        <div class="box-header">
                            @foreach($leads as $result)
                                <h3 class="box-title">View Your <span style=" font-weight: bold ">{{ $result->street." ".$result->city." ".$result->state." ".$result->zip }}</span> Leads</h3>
                                @break
                                @endforeach
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Appointment date</th>
                                    <th>Appointment time</th>
                                    <th>Submission Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($leads as $lead)
                                    <tr>
                                        <td>{{ $lead->lname }}</td>
                                        <td>{{ $lead->lemail }}</td>
                                        <td>{{ $lead->lphone }}</td>
                                        <td>{{ date('m-d-Y', strtotime($lead->appoint_date)) }}</td>
                                        <td>{{ date('g:i a', strtotime($lead->appoint_time)) }}</td>
                                        <td>{{ date('m-d-Y', strtotime($lead->created_at)) }}</td>
                                        <td> <a href="{{ url('/admin/leads/edit/'.$lead->lead_id) }}"><i class="glyphicon glyphicon-edit"></i> </a> || <a href="{{ url('/admin/leads/delete/'.$lead->lead_id) }}"><i class="glyphicon glyphicon-trash"></i> </a>  </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Appointment date</th>
                                    <th>Appointment time</th>
                                    <th>Submission Date</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    @endsection
