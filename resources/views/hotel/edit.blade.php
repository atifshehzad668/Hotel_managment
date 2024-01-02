@extends('layouts.app')

@section('title', 'Hotel List')

@section('content')
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Add Hotel</h4>
            </div>
            <div class="modal-body">
                <form method="Post" action="{{ route('hotel.update', $hotel->id) }}" id="add_hotel"
                    enctype="multipart/form-data">
                    {{ @csrf_field() }}
                    {{ @method_field('PATCH') }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" value="{{ $hotel->name }}" name="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" class="form-control" value="{{ $hotel->address }}" name="address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="number" class="form-control" value="{{ $hotel->phone }}" name="phone">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" value="{{ $hotel->email }}" name="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Stars</label>
                                <input type="integer" class="form-control" value="{{ $hotel->stars }}" name="stars">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Check_in</label>
                                <input type="time" class="form-control"value="{{ $hotel->checkin_time }}"
                                    name="check_in">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Check_out</label>
                                <input type="time" class="form-control" value="{{ $hotel->checkout_time }}"
                                    name="check_out">
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
                <a href="{{ route('hotel.index') }}">Close</a>
            </div>
        </div>
    </div>
@endsection
