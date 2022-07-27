@extends('layouts.base')
@section('content')

<div class="card-header">
         <h1 class="text-center">Edit meeting</h1>
      </div>
    <div class="card-body">
       <form action="{{url('/meeting/update')}}" class="form" method="post">
        @csrf
        <input type="hidden" value="{{$meeting->id}}" name="id">
        <div class="mb-3">
          <label for="" class="form-label">name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$product->name}}">
          @error('name')
           <p class="text-danger"> {{$message}}</p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="" class="form-label">description</label>
          <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{$meeting->description}}">
          @error('description')
           <p class="text-danger"> {{$message}}</p>
          @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">date-start</label>
            <input type="date" class="form-control @error('date-start') is-invalid @enderror" name="date-start" value="{{$meeeting->date-start}}">
            @error('date-start')
             <p class="text-danger"> {{$message}}</p>
            @enderror
          </div>
          <div class="mb-3">
            <label for="" class="form-label">date-end</label>
            <input type="date" class="form-control @error('date-end') is-invalid @enderror" name="date_end" value="{{$meeeting->date-end}}">
            @error('date-end')
             <p class="text-danger"> {{$message}}</p>
            @enderror
          </div>

       
        <div class="mb-3">
            <label for="" class="form-label">Room</label>
            <select name="rooms_id" id="" class="form-control  @error('rooms_id') is-invalid @enderror">
            <option selected>--select a room--</option>
              @foreach ($rooms as $room)
              <option value="{{$room->id}}">{{$room->name}}</option>
                  
              @endforeach
            </select>
            @error('rooms_id')
            <p class="text-danger">{{$message}}</p>
          @enderror  
          </div> 

          <div class="mb-3">
            <label for="" class="form-label">User</label>
            <select name="users_id" id="" class="form-control  @error('users_id') is-invalid @enderror">
            <option selected>--select a user--</option>
              @foreach ($users as $user)
              <option value="{{$user->id}}">{{$user->name}}</option>
                  
              @endforeach
            </select>
            @error('users_id')
            <p class="text-danger">{{$message}}</p>
          @enderror  
          </div> 
          <div class="mb-3">
            <label for="" class="form-label">need_itsupport</label>
            <input type="text" class="form-control @error('need_itsupport') is-invalid @enderror" name="need_itsupport" value="{{$meeeting->need_itsupport}}">
            @error('need_itsupport')
             <p class="text-danger"> {{$message}}</p>
            @enderror
          </div>
          <div class="mb-3">
            <label for="" class="form-label">need_media</label>
            <input type="text" class="form-control @error('need_media') is-invalid @enderror" name="need_media" value="{{$meeeting->need_media}}">
            @error('need_media')
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