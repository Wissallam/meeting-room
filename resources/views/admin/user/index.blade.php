@extends('admin.base')
@section('content')
<div class="row">
  <div class="row flex-grow">
      <div class="col-12 grid-margin stretch-card">
        <div class="card card-rounded">
          <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-start">
              <div>
                <h1 class="card-title card-title-dash text-dark ">Users list</h1>
              </div>
              <div>
                <a href="{{ url('user/new')}}" ><button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button" href="user/new"><i class="mdi mdi-library-plus"></i>Add new user</button>
                </a>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    <th>Role</th>
    <th>Departement</th>
    <th>edit/delete</th>
                  </tr>
                </thead>
              <tbody>
              @foreach ($users as $user)
              <tr>
                <td> {{$user->id}}</td>
                <td> {{$user->firstname}}</td>
                <td> {{$user->lastname}}</td>
                <td> {{$user->email}}</td>
                <td> departement</td>
                <td> role</td>

                <td> <a href="{{ url('/'.$user->id.'/user/edit')}}" class="btn btn-warning btn-rounded btn-icon"><i class="mdi mdi-pencil"></i></a>
                    <a href="{{ url('/'.$user->id.'/user/delete')}}" class="btn btn-danger btn-rounded btn-icon"><i class="mdi mdi-delete"></i></a>
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
  








    
{{ $users->links() }}