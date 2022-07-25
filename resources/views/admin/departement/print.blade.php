@extends('layouts.print')
@section('content')
@if (session()->has('message'))
<div class="alert alert-info">
  {{ session()->get('message') }}
</div>
@endif
<h1 class="mt-4 text-center" style="color:brown">List of departements  </h1> 
<table class="mt-4 table table-bordered">
  <tr class="table-primary">
    <th>ID</th>
    <th>name</th>

  </tr>
  @foreach ($departements as $departement)
  <tr>
    <td> {{$departement->id}}</td>
    <td> {{$departement->name}}</td>
      </tr>
  @endforeach
</table>
@endsection