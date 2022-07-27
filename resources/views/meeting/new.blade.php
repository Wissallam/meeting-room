


@extends('dashboard')
@section('content')  
 <h3 class="text-center">Add a new meeting</h3>
    <div class="row flex-grow">
      <div class="col-12 grid-margin stretch-card">
        <div class="card mt-3">
          <div class="card-body">
            <form class="forms-sample" action="{{url('/meeting/save')}}" method="post" enctype="multipart/form-data">
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
                  <label for="" class="form-label ">date-start</label>
                  <input type="date" class="form-control @error('date-start') is-invalid @enderror" name="date-start" value="{{old('date-start')}}" >
                  @error('date-start')
                    <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="" class="form-label ">date-end</label>
                  <input type="date" class="form-control @error('date-end') is-invalid @enderror" name="date-end" value="{{old('date-end')}}" >
                  @error('date-end')
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
                  <label for="" class="form-label ">rooms_id</label>
                  <input type="text" class="form-control @error('rooms_id') is-invalid @enderror" name="rooms_id" value="{{old('rooms_id')}}" >
                  @error('rooms_id')
                    <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="" class="form-label ">users_id</label>
                  <input type="text" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{old('users_id')}}" >
                  @error('users_id')
                    <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
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



























