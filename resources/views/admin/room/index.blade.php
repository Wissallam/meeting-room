@extends('admin.base')
<link rel="stylesheet" href="{{ asset('photos/photo1.css')}}">

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
                  <div>
                    <a href="{{ url('photo/new')}}" ><button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button" href="photo/new"><i class="mdi mdi-library-plus"></i>Add new photo</button>
                    </a>
                  </div>
                </div>
                

                <div class="row">
                 
                  @foreach ($photos as $photo )

                  <div class="col-sm-6">
                    <div class="card mt-4 ">
                      <div class="card-body container ">
                        <img src="{{asset('/storage/'.$photo->path)}}" class="image" style="width:450px;height:300px;">
                       
                        <div class="middle">
                          <a href="{{url($photo->id.'/photo/edit')}}"><div class="textgreen">Edit</div></a>
                          <a href="{{url($photo->id.'/photo/delete')}}"><div class="textred mt-1">Delete</div></a>

                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  <div class="container">
                    <img src="img_avatar.png" alt="Avatar" class="image" style="width:100%">
                    <div class="middle">
                      <div class="text">John Doe</div>
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







