@extends('layouts.base')
@section('content')

<div class="card-header">
         <h1 class="text-center">Edit seting</h1>
      </div>
    <div class="card-body">
       <form action="{{url('/setting/update')}}" class="form" method="post">
        @csrf
        <input type="hidden" value="{{$client->id}}" name="id">
        <div class="mb-3">
          <label for="" class="form-label">organisation_name</label>
          <input type="text" class="form-control @error('organisation_name') is-invalid @enderror" name="organisation_name" value="{{$setting->organisation_name}}">
          @error('name')
           <p class="text-danger"> {{$message}}</p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="" class="form-label">email_it_support</label>
          <input type="email" class="form-control @error('email_it_support') is-invalid @enderror" name="email_it_support" value="{{$setting->email_it_support}}">
          @error('email_it_support')
           <p class="text-danger"> {{$message}}</p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="" class="form-label">email_media_team</label>
          <input type="email" class="form-control @error('email_media_team') is-invalid @enderror" name="email_media_team" value="{{$setting->email_media_team}}">
          @error('email_media_team')
           <p class="text-danger"> {{$message}}</p>
          @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">email_table_service</label>
            <input type="email" class="form-control @error('email_table_service') is-invalid @enderror" name="email_table_service" value="{{$setting->email_table_service}}">
            @error('email_table_service')
             <p class="text-danger"> {{$message}}</p>
            @enderror
          </div>
        
        <div class="mb-3">
         <input type="submit" value="Save" class="btn btn-success">
        </div>
       </form>

    </div>
  </div>




@endsection