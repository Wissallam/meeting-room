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
         <h1 class="text-center">New meeting</h1>
      </div>
    <div class="card-body">
       <form action="{{url('/meeting/save')}}" class="form" method="post">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
          @error('name')
           <p class="text-danger"> {{$message}}</p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="" class="form-label ">description</label>
          <input type="description" class="form-control @error('name') is-invalid @enderror" name="description" value="{{old('description')}}" >
          @error('description')
            <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label ">date_start</label>
            <input type="date" class="form-control @error('date_start') is-invalid @enderror" name="date_start" value="{{old('date_start')}}" >
            @error('date_start')
              <p class="text-danger">{{$message}}</p>
            @enderror
          </div>
          <div class="mb-3">
            <label for="" class="form-label ">date_end</label>
            <input type="date" class="form-control @error('date_end') is-invalid @enderror" name="date_end" value="{{old('date_end')}}" >
            @error('date_end')
              <p class="text-danger">{{$message}}</p>
            @enderror
          </div>
          <div class="mb-3">
            <label for="" class="form-label ">nb_guest</label>
            <input type="text" class="form-control @error('nb_guest') is-invalid @enderror" name="nb_guest" value="{{old('nb_guest')}}" >
            @error('nb_guest')
              <p class="text-danger">{{$message}}</p>
            @enderror
          </div>
          <div class="mb-3">
            <label for="" class="form-label ">type_event</label>
            <input type="text" class="form-control @error('type_event') is-invalid @enderror" name="type_event" value="{{old('type_event')}}" >
            @error('type_event')
              <p class="text-danger">{{$message}}</p>
            @enderror
          </div>
        <div class="mb-3">
            <label for="" class="form-label">Room</label>
            <select name="room_id" id="" class="form-control @error('room_id') is-invalid @enderror">
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

            <div class="mb-3">
                <label for="" class="form-label">User</label>
                <select name="user_id" id="" class="form-control @error('user_id') is-invalid @enderror">
                <option selected>--select a user--</option>
                  @foreach ($users as $user)
                  <option value="{{$user->id}}">{{$user->name}}</option>
                      
                  @endforeach
                </select>
                @error('user_id')
                <p class="text-danger">{{$message}}</p>
              @enderror  
              </div>        
            <div class="mb-3">
    


















            <div class="mb-3">
                <label for="" class="form-label ">need_itsupport</label>
                <input type="text" class="form-control @error('need_itsupport') is-invalid @enderror" name="need_itsupport" value="{{old('need_itsupport')}}" >
                @error('need_itsupport')
                  <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="mb-3">
                <label for="" class="form-label ">need_media</label>
                <input type="text" class="form-control @error('need_media') is-invalid @enderror" name="need_media" value="{{old('need_media')}}" >
                @error('need_media')
                  <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
         <input type="submit" value="Save" class="btn btn-success">
        </div>
       </form>

    </div>
  </div>


@endsection