@extends('layouts.app')

@section('title', 'User List')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>User List</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('dash') }}">Home</a>
                </li>
                <li>
                    <a>Hotels</a>
                </li>
                <li class="active">
                    <strong>Hotel List</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

            <a class="btn btn-info btn-outline" href="{{ route('hotel.create') }}" style="margin-top:40px;">Add
                Hotel</a>

        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Hotel List</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-Brand">
                                <li><a href="#">Config option 1</a></li>
                                <li><a href="#">Config option 2</a></li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Phone</th>

                                        <th>Email</th>
                                        <th>Stars </th>


                                        <th>Check_in</th>
                                        <th>Check_out</th>
                                        <th width="100">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hotels as $key => $hotel)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td><strong>{{ $hotel->name }}</strong></td>
                                            <td>{{ $hotel->address }}</td>

                                            <td>{{ $hotel->phone }}</td>
                                            <td>{{ $hotel->email }}</td>
                                            <td>{{ $hotel->stars }}</td>
                                            <td>{{ $hotel->checkin_time }}</td>
                                            <td>{{ $hotel->checkout_time }}</td>




                                            <td>
                                                <div class="btn-group btn-group-sm">

                                                    <a href="{{ route('hotel.destroy', $hotel->id) }}"
                                                        class="btn btn-danger"
                                                        onclick="return confirm('Are You Sure To Delete This..?')"
                                                        title="Delete"><i class="fa fa-trash" data-toggle="modal"
                                                            data-target="#myModal7"></i></a>


                                                    <a href="{{ route('hotel.edit', $hotel->id) }}"
                                                        class="btn btn-warning edit_button"><i class="fa fa-edit"></i></a>





                                                    {{-- <a href="{{ route('user.show', $user->id) }}" class="btn btn-info"><i
                                                    class="fa fa-eye"></i></a> --}}
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>











@endsection
