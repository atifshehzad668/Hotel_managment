@extends('layouts.app')

@section('title', 'Room Type\ List')

@section('content')
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Edit RoomType</h4>
            </div>
            <div class="modal-body">
                <form method="Post" action="{{ route('roomtype.update', $roomtype->id) }}" id="add_roomtype"
                    enctype="multipart/form-data">
                    {{ @csrf_field() }}
                    {{ @method_field('PATCH') }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" value="{{ $roomtype->name }}" name="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Description</label>
                                <input type="text" class="form-control" value="{{ $roomtype->description }}"
                                    name="description">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Price Per Night</label>
                                <input type="decimal" class="form-control" value="{{ $roomtype->pricepernight }}"
                                    name="price_per_night">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Capacity</label>
                                <input type="number" class="form-control" value="{{ $roomtype->capacity }}"
                                    name="capacity">
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for=""></label>
                                <input type="submit" class="btn btn-info btn-block" name="submit" value="Update">
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
