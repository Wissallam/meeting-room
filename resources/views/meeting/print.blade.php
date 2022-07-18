@extends('layouts.print')
@section('content')
@if (session()->has('message'))
<div class="alert alert-info">
  {{ session()->get('message') }}
</div>
@endif
<h1 class="mt-4 text-center" style="color:brown">List of meetings  </h1> 
<table class="mt-4 table table-bordered">
  <tr class="table-primary">
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    <th>date_start</th>
    <th>date_end</th>
    <th>nb_guest</th>
    <th>type_event</th>
    <th>need_itsupport</th>
    <th>need_media</th>
    <th>Room</th>
    <th>User</th>
   

  </tr>
  @foreach ($meetings as $meeting)
  <tr>
    <td> {{$meeting->id}}</td>
    <td> {{$meeting->name}}</td>
    <td> {{$meeting->description}}</td>
    <td> {{$meeting->date_start}}</td>
    <td> {{$meeting->date_end}}</td>
    <td> {{$meeting->nb_guest}}</td>
    <td> {{$meeting->type_event}}</td>
    <td> {{$meeting->need_itsupport}}</td>
    <td> {{$meeting->need_media}}</td>
    <td> {{$meeting->room->name}}</td>
    <td> {{$meeting->user->name}}</td>
      </tr>
  @endforeach
</table>
@endsection