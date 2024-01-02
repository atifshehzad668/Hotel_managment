@extends('layouts.app')

@section('title', 'Hotel List')

@section('content')
    <div class="card">
        <h4 class="modal-title">Room Booking</h4>

        <div class="">
            <form method="Post" action="{{ route('booking.store') }}" id="booking" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6">

                        <label for="">Select Guests</label>
                        <select class="js-example-basic-single form-select " style="height: 100%; width:100%" name="guest"
                            id="guests">


                            @foreach ($guests as $guest)
                                <option value="{{ $guest->id }}">{{ $guest->first_name }} {{ $guest->last_name }}
                                </option>
                            @endforeach
                        </select>

                    </div>


                    <div class="col-md-6">

                        <label for="">Select Room</label>
                        <select class="js-example-basic-multiple form-select " style="height: 100%; width:100%"
                            name="rooms[]" multiple="multiple" id="rooms">


                            @foreach ($rooms as $room)
                                <option value="{{ $room->id }}">{{ $room->RoomNumber }}
                                </option>
                            @endforeach
                        </select>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Check in</label>
                            <input type="date" class="form-control" name="check_in">
                        </div>
                    </div>





                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for=""></label>
                            <input type="submit" class="btn btn-info btn-block" name="submit" value="Save">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <a href="#">Close</a>
        </div>
    </div>
    </div>
    <!-- Include jQuery -->



@endsection
