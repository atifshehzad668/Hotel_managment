@extends('layouts.app')

@section('title', 'Hotel List')

@section('content')
    <div class="card">
        <h4 class="modal-title">Update Booking</h4>

        <div class="">
            <form method="Post" action="{{ route('booking.update', $booking->id) }}" id="booking"
                enctype="multipart/form-data">
                {{ @csrf_field() }}
                {{ @method_field('PATCH') }}

                <div class="row">
                    <div class="col-md-6">

                        <label for="">Select Guests</label>
                        <select class="js-example-basic-single form-select" style="height: 100%; width:100%" name="guest"
                            id="guests">

                            <option value="{{ $booking->guest->id }}"
                                {{ $booking->guest->id == $previouslySelectedGuest ? 'selected' : '' }}>
                                {{ $booking->guest->first_name }} {{ $booking->guest->last_name }}
                            </option>

                        </select>

                    </div>


                    <div class="col-md-6">
                        <label for="">Select Room</label>
                        <select class="js-example-basic-single form-select" style="height: 100%; width:100%" name="room"
                            id="room">
                            @foreach ($allRooms as $room)
                                <option value="{{ $room->id }}"
                                    {{ $room->id == $previouslySelectedRooms ? 'selected' : '' }}>
                                    {{ $room->RoomNumber }}
                                </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Check in</label>
                            <input type="date" class="form-control" value="{{ $booking->checkin_date }}"
                                name="check_in">
                        </div>
                    </div>





                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for=""></label>
                            <input type="submit" class="btn btn-info btn-block" name="submit" value="update">
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
