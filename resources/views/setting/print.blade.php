@extends('layouts.print')
@section('content')
@if (session()->has('message'))
<div class="alert alert-info">
  {{ session()->get('message') }}
</div>
@endif
<h1 class="mt-4 text-center" style="color:brown">List of settings  </h1> 
<table class="mt-4 table table-bordered">
  <tr class="table-primary">
    <th>ID</th>
    <th>organisation_name</th>
    <th>email_it_support</th>
    <th>email_media_team</th>
    <th>email_table_service</th>
    

  </tr>
  @foreach ($settings as $setting)
  <tr>
    <td> {{$setting->id}}</td>
    <td> {{$setting->organisation_name}}</td>
    <td> {{$seting->email_it_support}}</td>
    <td> {{$setting->email_media_team}}</td>
    <td> {{$setting->email_table_service}}</td>
  
      </tr>
  @endforeach
</table>
@endsection