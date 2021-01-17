@extends('layout')

@section('content')
    <div class="col-sm-6">
        <h1>Edit Restaurant</h1>
        <form method="post" action="/edit">
            @csrf
            <div class="form-group">
                <input type="hidden" class="form-control" name="id" value="{{$data->id}}" >
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="{{$data->name}}" >
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" value="{{$data->email}}" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address" value="{{$data->address}}" placeholder="Enter Address">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@stop
