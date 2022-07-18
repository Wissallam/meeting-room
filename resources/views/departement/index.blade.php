@extends('layouts.base')
@section('content')
@if (session()->has('message'))
<div class="alert alert-info">
  {{ session()->get('message') }}
</div>
@endif
<h1 class="text-center">List of departements <a class= "btn btn-outline-primary" href="{{url('/departement/new')}}"> <i class="bi bi-plus-lg"></i></a> </h1> 
<table class="table table-hover table-bordered">
  <tr class="table-primary">
    <th>ID</th>
    <th>name</th>
    <th>edit/delete</th>
   

  </tr>
  @foreach ($departements as $departement)
  <tr>
    <td> {{$departement->id}}</td>
    <td> {{$departement->name}}</td>
  
    <td> <a href="{{ url('/'.$departement->id.'/departement/edit')}}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
        <a href="{{ url('/'.$departement->id.'/departement/delete')}}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
    </td>


  </tr>
  @endforeach
</table>
@endsection