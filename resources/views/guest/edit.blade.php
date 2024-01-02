@extends('layouts.app')

@section('title', 'Hotel List')

@section('content')
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Update Guest</h4>
            </div>
            <div class="modal-body">
                <form method="Post" action="{{ route('guest.update', $guest->id) }}" enctype="multipart/form-data">
                    {{ @csrf_field() }}
                    {{ @method_field('PATCH') }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" class="form-control" value="{{ $guest->first_name }}" name="fname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" value="{{ $guest->last_name }}" name="lname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Date Of Birth</label>
                                <input type="date" class="form-control" value="{{ $guest->date_of_birth }}"
                                    name="dob">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="test" class="form-control" value="{{ $guest->address }}" name="address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="integer" class="form-control" value="{{ $guest->phone }}" name="phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" value="{{ $guest->email }}" name="email">
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
                <a href="{{ route('hotel.index') }}">Close</a>
            </div>
        </div>
    </div>
@endsection
