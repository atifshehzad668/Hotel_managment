@extends('layouts.app')

@section('title', 'Room Type\ List')

@section('content')
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Add Room</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('room.update', $selected_room->id) }}" id="update_room"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Room Number</label>
                                <input type="number" class="form-control" value="{{ $selected_room->RoomNumber }}"
                                    name="room_number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Select Hotel</label>
                                <select name="hotel_id" class="form-control" id="">
                                    <option value="" disabled>Select Hotel</option>
                                    @foreach ($hotels as $hotel)
                                        <option value="{{ $hotel->id }}"
                                            {{ old('hotel_id', $selected_room->hotel->id) == $hotel->id ? 'selected' : '' }}>
                                            {{ $hotel->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- Rest of your code... -->


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Select Room Type</label>
                                <select name="roomtype_id" class="form-control" id="">
                                    <option value="" disabled>Select Room Type</option>

                                    @foreach ($roomTypes as $roomType)
                                        <option value="{{ $roomType->id }}"
                                            {{ old('roomtype_id', $selected_room->roomType->id) == $roomType->id ? 'selected' : '' }}>
                                            {{ $roomType->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Select Status</label>
                                <select name="status" class="form-control" id="">
                                    <option value="" disabled>Select Status</option>
                                    <option value="pending"
                                        {{ old('status', $selected_room->status) == 'pending' ? 'selected' : '' }}>pending
                                    </option>
                                    <option value="registered"
                                        {{ old('status', $selected_room->status) == 'registered' ? 'selected' : '' }}>
                                        registered</option>
                                </select>
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
@endsection
