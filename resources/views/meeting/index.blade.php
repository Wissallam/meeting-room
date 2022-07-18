@extends('layouts.base')
@section('content')
@if (session()->has('message'))
<div class="alert alert-info">
  {{ session()->get('message') }}
</div>
@endif
<h1 class="mt-4 text-center">List of meetings <a class= "btn btn-outline-primary" href="{{url('/meeting/new')}}"> <i class="bi bi-plus-lg"></i></a>  <a class= "btn btn-outline-primary" href="{{url('/meeting/print')}}"> <i class="bi bi-printer"></i></a></h1> 
<table class="mt-4 table table-hover table-bordered">
  <tr class="table-primary">
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    <th>Room</th>
    <th>User</th>
    <th>edit/delete</th>

  </tr>
  @foreach ($meetings as $meeting)
  <tr>
    <td> {{$meeting->id}}</td>
    <td> {{$meeting->name}}</td>
    <td> {{$meeting->description}}</td>
    <td> {{$meeting->room->name}}</td>
    <td> {{$meeting->user->name}}</td>
    <td> <a href="{{ url('/'.$meeting->id.'/meeting/edit')}}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
        <a href="{{ url('/'.$meeting->id.'/meeting/delete')}}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
    </td>


  </tr>
  @endforeach
</table>
{{ $meetings->links() }}
@endsection