@extends('admin.base')
@extends('admin.print')
@yield('print')
@section('content')
<div class="row">
  <div class="row flex-grow">
      <div class="col-12 grid-margin stretch-card">
        <div class="card card-rounded">
          <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-start">
              <div>
                <h1 class="card-title card-title-dash text-dark ">Departements list</h1>
              </div>
              <div>
                <a href="{{ url('departement/new')}}" ><button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button" href="departement/new"><i class="mdi mdi-library-plus"></i>Add new departement</button>
                </a>
              </div>
            </div>
            <div class="table-responsive  mt-1">
              <table class="table table-hover" >
                <thead >
                  <tr>

                    <th>#</th>
                    <th>Name</th>
                    <th>Nbr users</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                      @foreach ($departements as $departement)
                      <tr>
                        <td> {{$departement->id}}</td>
                        <td> {{$departement->name}}</td>
                        <td> #nbr of users</td>

                        <td> <a href="{{ url('/'.$departement->id.'/departement/edit')}}" class="btn btn-warning btn-rounded btn-icon"><i class="mdi mdi-pencil"></i></a>
                            <a href="{{ url('/'.$departement->id.'/departement/delete')}}" class="btn btn-danger btn-rounded btn-icon"><i class="mdi mdi-delete"></i></a>
          
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
  