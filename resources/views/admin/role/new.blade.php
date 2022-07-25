@extends('admin.base')
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
  <div class="row">
    <h3 class="text-center">Add a new role</h3>
    <div class="row flex-grow">
        <div class="col-12 grid-margin stretch-card">
         
          <div class="card card-rounded">
            <div class="card-body">
              <div class="d-sm-flex justify-content-between align-items-start">
                
                <div>
                </div>
              </div>


    <div class="card-body">
       <form action="{{url('/role/save')}}" class="form" method="post">
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