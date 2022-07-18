@extends('layouts.base')
@section('content')
@if (session()->has('message'))
<div class="alert alert-info">
  {{ session()->get('message') }}
</div>
@endif
<h1 class="mt-4 text-center">List of features <a class= "btn btn-outline-primary" href="{{url('/feature/new')}}"> <i class="bi bi-plus-lg"></i></a>  <a class= "btn btn-outline-primary" href="{{url('/feature/print')}}"> <i class="bi bi-printer"></i></a></h1> 
<table class="mt-4 table table-hover table-bordered">
  <tr class="table-primary">
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    <th>Room</th>
    <th>edit/delete</th>

  </tr>
  @foreach ($features as $feature)
  <tr>
    <td> {{$feature->id}}</td>
    <td> {{$feature->name}}</td>
    <td> {{$feature->description}}</td>
    <td> {{$feature->room->name}}</td>
    <td> <a href="{{ url('/'.$feature->id.'/feature/edit')}}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
        <a href="{{ url('/'.$feature->id.'/feature/delete')}}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
    </td>


  </tr>
  @endforeach
</table>
{{ $features->links() }}
@endsection