
@extends('admin.base')
@section('print')
<a href="/room" class="btn btn-otline-dark"><i class="mdi mdi-arrow-left"></i> Back to rooms</a>
@endsection
@section('content')  
 <h3 class="text-center">Add a new photo</h3>
    <div class="row flex-grow">
      <div class="col-12 grid-margin stretch-card">
        <div class="card mt-3">
          <div class="card-body">
            <form class="forms-sample" action="{{url('/photo/save')}}" method="post" enctype="multipart/form-data">
              @csrf  
              <div class="form-group">
                  <label for="" class="form-label">room</label>
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

                <div class="form-group">
                  <label for="formFile" class="form-label">photo</label>
                  <input class="form-control" type="file" name="image" id="formFile">
                </div>
              <div class="mb-3">
                <input type="submit" value="Save" class="btn btn-primary">
               </div>
            </form>
          </div>
        </div>
      </div>

    </div>
    @endsection
    




