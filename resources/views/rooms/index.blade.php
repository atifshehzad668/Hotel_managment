@extends('layouts.app')

@section('title', 'Rooms List')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Rooms List</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('dash') }}">Home</a>
                </li>
                <li>

                </li>
                <li class="active">
                    <strong>Rooms List</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

            <a class="btn btn-info btn-outline" href="{{ route('room.create') }}" style="margin-top:40px;">Add
                Room </a>

        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Rooms List</h5>
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
                                        <th>Room Number</th>
                                        <th>Hotel Name</th>
                                        <th>Room Type</th>

                                        <th>Status</th>

                                        <th width="100">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rooms as $key => $room)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td><strong>{{ $room->RoomNumber }}</strong></td>
                                            <td>{{ $room->hotel->name }}</td>
                                            <td>{{ $room->roomType->name }}</td>

                                            <td>{{ $room->Status }}</td>







                                            <td>
                                                <div class="btn-group btn-group-sm">

                                                    <a href="{{ route('room.destroy', $room->id) }}" class="btn btn-danger"
                                                        onclick="return confirm('Are You Sure To Delete This..?')"
                                                        title="Delete"><i class="fa fa-trash" data-toggle="modal"
                                                            data-target="#myModal7"></i></a>


                                                    <a href="{{ route('room.edit', $room->id) }}"
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
