@extends('layout')

@section('content')
    <h1>Restaurant list page is here</h1>
    @if(Session::get('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{Session::get('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    {{--{{print_r($data)}}--}}

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Create Date</th>
                <th scope="col">Updated Date</th>
                <th>Operation</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
           <tr>
                <th>{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
               <td>{{$item->address}}</td>
               <td>{{$item->created_at}}</td>
               <td>{{$item->updated_at}}</td>
               <td>
                   <a href="/delete/{{$item->id}}"><i class="fa fa-trash fa-2x"></i></a>
                   <a href="/edit/{{$item->id}}"><i class="fa fa-pencil fa-2x "></i></a>
               </td>
            </tr>
            @endforeach
            </tbody>
        </table>
            {{--<p>{{$item->name}}</p>--}}

@stop
