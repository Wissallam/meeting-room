@extends('admin.base')
@section('mini-nav')
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#rooms" role="tab" aria-controls="rooms" aria-selected="true">Rooms</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#photos" role="tab" aria-controls="photos" aria-selected="false">Photos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#features" role="tab" aria-selected="false">Features</a>
  </li>
</ul>
@endsection

@section('content')

    <!-- Rooms -->
<div class="tab-pane fade show active" id="rooms" role="tabpanel" aria-labelledby="rooms"> 
<div class="row">
  <div class="row flex-grow">
      <div class="col-12 grid-margin stretch-card">
        <div class="card card-rounded">
          <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-start">
              <div>
                <h1 class="card-title card-title-dash text-dark ">Rooms list</h1>
              </div>
             
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <!--end  Rooms -->

    <!-- Photos -->
  <div class="tab-pane fade " id="photos" role="tabpanel" aria-labelledby="photos"> 
    <div class="row">
      <div class="row flex-grow">
          <div class="col-12 grid-margin stretch-card">
            <div class="card card-rounded">
              <div class="card-body">
                <div class="d-sm-flex justify-content-between align-items-start">
                  <div>
                    <h1 class="card-title card-title-dash text-dark ">Photos list</h1>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
    <!--end  Photos -->

    <!-- Features -->
    <div class="tab-pane fade " id="features" role="tabpanel" aria-labelledby="features"> 
      <div class="row">
        <div class="row flex-grow">
            <div class="col-12 grid-margin stretch-card">
              <div class="card card-rounded">
                <div class="card-body">
                  <div class="d-sm-flex justify-content-between align-items-start">
                    <div>
                      <h1 class="card-title card-title-dash text-dark ">Features list</h1>
                    </div>
                   
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!--end  Features -->
  
    
    @endsection
  






<h1 class="mt-4 text-center">List of rooms <a class= "btn btn-outline-primary" href="{{url('/room/new')}}"> <i class="bi bi-plus-lg"></i></a>  <a class= "btn btn-outline-primary" href="{{url('/room/print')}}"> <i class="bi bi-printer"></i></a></h1> 
@include('sweetalert::alert')
<table class="mt-4 table table-hover table-bordered">
  <tr class="table-primary">
    <th>ID</th>
    <th>number</th>
    <th>name</th>
    <th>capacity</th>
    <th>floor</th>
    <th>color</th>
    <th>invalid_from</th>
    <th>invalid_to</th>
    <th>edit/delete</th>

  </tr>
  @foreach ($rooms as $room)
  <tr>
    <td> {{$room->id}}</td>
    <td> {{$room->number}}</td>
    <td> {{$room->name}}</td>
    <td> {{$room->capacity}}</td>
    <td> {{$room->floor}}</td>
    <td> {{$room->color}}</td>
    <td> {{$room->invalid_from}}</td>
    <td> {{$room->invalid_to}}</td>
    <td> <a href="{{ url('/'.$room->id.'/room/edit')}}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
        <a href="{{ url('/'.$room->id.'/room/delete')}}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
    </td>


  </tr>
  @endforeach
</table>
{{ $rooms->links() }}