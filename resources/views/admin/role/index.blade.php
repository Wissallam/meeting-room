@extends('admin.base')
@section('content')
<div class="row">
  <div class="row flex-grow">
      <div class="col-12 grid-margin stretch-card">
        <div class="card card-rounded">
          <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-start">
              <div>
                <h1 class="card-title card-title-dash text-dark ">roles list</h1>
              </div>
              <div>
                <a href="{{ url('role/new')}}" ><button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button" href="role/new"><i class="mdi mdi-library-plus"></i>Add new role</button>
                </a>
              </div>
            </div>
            <div class="table-responsive  mt-1">
              <table class="table table-hover">
                <thead >
                  <tr>

                    <th>#</th>
                    <th>Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                      @foreach ($roles as $role)
                      <tr>
                        <td> {{$role->id}}</td>
                        <td> {{$role->name}}</td>
                        <td> <a href="{{ url('/'.$role->id.'/role/edit')}}" class="btn btn-warning btn-rounded btn-icon"><i class="mdi mdi-pencil"></i></a>
                            <a href="{{ url('/'.$role->id.'/role/delete')}}" class="btn btn-danger btn-rounded btn-icon"><i class="mdi mdi-delete"></i></a>
          
                          </td>
                    
                    
                      </tr>
                      @endforeach
                      {{ $roles->links() }}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection
  




 
