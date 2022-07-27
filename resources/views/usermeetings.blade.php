@extends('dashboard')
@section('content')
<div class="row">
  <div class="row flex-grow">
      <div class="col-12 grid-margin stretch-card">
        <div class="card card-rounded">
          <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-start">
              <div>
                <h1 class="card-title card-title-dash text-dark ">meetings list</h1>
              </div>
              <div>
                <a href="{{ url('meeting/new')}}" ><button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button" href="meeting/new"><i class="mdi mdi-library-plus"></i>Add new meeting</button>
                </a>
              </div>
            </div>
            <div class="table-responsive  mt-1">
              <table class="table table-hover" >
                <thead >
                  <tr>

                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Room</th>
                    <th>edit/delete</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($meetings as $meeting)
                  <tr>
                    <td> {{$meeting->id}}</td>
                    <td> {{$meeting->name}}</td>
                    <td> {{$meeting->description}}</td>
                    <td> {{$meeting->room->name}}</td>
                    <td> <a href="{{ url('/'.$meeting->id.'/meeting/edit')}}" class="btn btn-warning btn-sm"><i class="mdi mdi-pencil"></i></a>
                        <a href="{{ url('/'.$meeting->id.'/meeting/delete')}}" class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i></a>
                    </td>
                
                
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection
  







