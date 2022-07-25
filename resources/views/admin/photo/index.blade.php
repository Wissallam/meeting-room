@extends('admin.room.index')
@section('photo-index')
<div>
    <h1 class="card-title card-title-dash text-dark ">Photos list</h1>
  </div>
  <div>
    <a href="{{ url('photo/new')}}" ><button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button" href="photo/new"><i class="mdi mdi-library-plus"></i>Add new photo</button>
    </a>
</div>

@endsection