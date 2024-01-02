@extends('layouts.app')

@section('title', 'User List')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Guest List</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('dash') }}">Home</a>
                </li>
                <li>
                    <a>Guest Bookings</a>
                </li>
                <li class="active">
                    <strong>Booking List</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

            <a class="btn btn-info btn-outline" href="{{ route('booking.create') }}" style="margin-top:40px;">Book The Room
            </a>

        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Booking List</h5>
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
                                        <th>Guest Name</th>
                                        <th>Room Number</th>
                                        <th>Check IN Date</th>

                                        <th>Room Price</th>


                                        <th width="100">Action</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($bookings as $booking)
                                        <tr>

                                            <td><strong>{{ $booking->guest->first_name }}
                                                    {{ $booking->guest->last_name }}</strong></td>
                                            {{-- @foreach ($booking->rooms as $room) --}}
                                            <td>{{ $booking->rooms->RoomNumber }}</td>
                                            {{-- @endforeach --}}

                                            <td>{{ $booking->checkin_date }}</td>
                                            <td>{{ $booking->total_price }}</td>





                                            <td>
                                                <div class="btn-group btn-group-sm">

                                                    <a href="{{ route('booking.destroy', $booking->id) }}"
                                                        class="btn btn-danger"
                                                        onclick="return confirm('Are You Sure To Delete This..?')"
                                                        title="Delete"><i class="fa fa-trash" data-toggle="modal"
                                                            data-target="#myModal7"></i></a>


                                                    <a href="{{ route('booking.edit', $booking->id) }}"
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
