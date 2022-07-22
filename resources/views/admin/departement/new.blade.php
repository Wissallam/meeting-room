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
         <h1 class="text-center">New departement</h1>
      </div>
    <div class="card-body">
       <form action="{{url('/departement/save')}}" class="form" method="post">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
          @error('name')
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