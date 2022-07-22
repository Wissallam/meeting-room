@extends('layouts.base')
@section('content')
@if (session()->has('message'))
<div class="alert alert-info">
  {{ session()->get('message') }}
</div>
@endif
<h1 class="text-center">List of settings <a class= "btn btn-outline-primary" href="{{url('/setting/new')}}"> <i class="bi bi-plus-lg"></i></a> </h1> 
<table class="table table-hover table-bordered">
  <tr class="table-primary">
    <th>ID</th>
    <th>organisation_name</th>
    <th>email_it_support</th>
    <th>email_media_team</th>
    <th>email_table_service</th>
    <th>edit/delete</th>
   

  </tr>
  @foreach ($settings as $setting)
  <tr>
    <td> {{$setting->id}}</td>
    <td> {{$setting->organisation_name}}</td>
    <td> {{$setting->email_it_support}}</td>
    <td> {{$settiong->email_table_service}}</td>
  
    <td> <a href="{{ url('/'.$setting->id.'/setting/edit')}}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
        <a href="{{ url('/'.$detailpurchase->id.'/setting/delete')}}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
    </td>


  </tr>
  @endforeach
</table>
@endsection