@extends('layouts.base')
@section('content')

<div class="card-header">
         <h1 class="text-center">Edit feature</h1>
      </div>
    <div class="card-body">
       <form action="{{url('/feature/update')}}" class="form" method="post">
        @csrf
        <input type="hidden" value="{{$feature->id}}" name="id">
        <div class="mb-3">
          <label for="" class="form-label">name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$feature->name}}">
          @error('name')
           <p class="text-danger"> {{$message}}</p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="" class="form-label">description</label>
          <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{$feature->description}}">
          @error('description')
           <p class="text-danger"> {{$message}}</p>
          @enderror
        </div>
       
        <div class="mb-3">
            <label for="" class="form-label">Room</label>
            <select name="room_id" id="" class="form-control  @error('room_id') is-invalid @enderror">
            <option selected>--select a room--</option>
              @foreach ($rooms as $room)
              <option value="{{$room->id}}">{{$room->name}}</option>
                  
              @endforeach
            </select>
            @error('room_id')
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