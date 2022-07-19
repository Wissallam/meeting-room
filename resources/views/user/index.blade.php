<h1 class="mt-4 text-center">List of users <a class= "btn btn-outline-primary" href="{{url('/user/new')}}"> <i class="bi bi-plus-lg"></i></a>  <a class= "btn btn-outline-primary" href="{{url('/user/print')}}"> <i class="bi bi-printer"></i></a></h1> 
<table class="mt-4 table table-hover table-bordered">
  <tr class="table-primary">
    <th>ID</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    <th>Role</th>
    <th>Departement</th>
    <th>edit/delete</th>

  </tr>
  @foreach ($users as $user)
  <tr>
    <td> {{$user->firstname}}</td>
    <td> {{$user->lastname}}</td>
    <td> {{$user->email}}</td>
    <td> {{$user->role->name}}</td>
    <td> {{$user->departement->name}}</td>
    <td> <a href="{{ url('/'.$user->id.'/user/edit')}}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
        <a href="{{ url('/'.$user->id.'/user/delete')}}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
    </td>


  </tr>
  @endforeach
</table>
{{ $users->links() }}