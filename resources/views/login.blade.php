{{--<h1>Home Page</h1>--}}
@extends('layout')

@section('content')
    <h1> Login User page is here</h1>
    <div class="col-sm-8">
        <form method="post" action="login">
            @csrf
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@stop
