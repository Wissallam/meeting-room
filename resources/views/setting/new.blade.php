@extends('layouts.base')
@section('content')
<!-- @if ( $errors->any())
  <div class="alert alert-danger" role="alert">
       
      <ul>
        @foreach ($errors->all() as $error )
        <li>{{$error}}</li> 
      @endforeach
      </ul>
  </div>
 
  @endif -->

<div class="card-header">
         <h1 class="text-center">New setting</h1>
      </div>
    <div class="card-body">
       <form action="{{url('/setting/save')}}" class="form" method="post">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">organisation_name</label>
          <input type="text" class="form-control @error('organisation_name') is-invalid @enderror" name="organisation_name" value="{{old('organisation_name')}}">
          @error('organisation_name')
           <p class="text-danger"> {{$message}}</p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="" class="form-label ">email_it_support</label>
          <input type="email" class="form-control @error('email_it_support') is-invalid @enderror" name="email_it_support" value="{{old('email_it_support')}}" >
          @error('email_it_support')
            <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="" class="form-label">email_media_team</label>
          <input type="email" class="form-control @error('email_media_team') is-invalid @enderror" name="email_media_team" value="{{old('email_media_team')}}">
          @error('email_media_team')
          <p class="text-danger">{{$message}}</p>
          @enderror    
        </div>     
        <div class="mb-3">
          <label for="" class="form-label">email_table_service</label>
          <input type="email" class="form-control @error('email_table_service') is-invalid @enderror" name="email_table_service" value="{{old('email_table_service')}}">
          @error('email_table_service')
          <p class="text-danger">{{$message}}</p>
          @enderror    

        </div>  
        <div class="mb-3">
         <input type="submit" value="Save" class="btn btn-success">
        </div>
       </form>

    </div>
  </div>


@endsection