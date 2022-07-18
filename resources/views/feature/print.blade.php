@extends('layouts.print')
@section('content')
@if (session()->has('message'))
<div class="alert alert-info">
  {{ session()->get('message') }}
</div>
@endif
<h1 class="mt-4 text-center" style="color:brown">List of features  </h1> 
<table class="mt-4 table table-bordered">
  <tr class="table-primary">
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    <th>Room</th>
   

  </tr>
  @foreach ($features as $feature)
  <tr>
    <td> {{$feature->id}}</td>
    <td> {{$feature->name}}</td>
    <td> {{$feature->description}}</td>
    <td> {{$feature->room->name}}</td>
      </tr>
  @endforeach
</table>
@endsection