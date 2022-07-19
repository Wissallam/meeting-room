<h1 class="mt-4 text-center">List of roles <a class= "btn btn-outline-primary" href="{{url('/role/new')}}"> <i class="bi bi-plus-lg"></i></a>  <a class= "btn btn-outline-primary" href="{{url('/role/print')}}"> <i class="bi bi-printer"></i></a></h1> 
<table class="mt-4 table table-hover table-bordered">
  <tr class="table-primary">
    <th>ID</th>
    <th>name</th>
    <th>edit/delete</th>

  </tr>
  @foreach ($roles as $role)
  <tr>
    <td> {{$role->id}}</td>
    <td> {{$role->name}}</td>
    <td> <a href="{{ url('/'.$role->id.'/role/edit')}}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
        <a href="{{ url('/'.$role->id.'/role/delete')}}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
    </td>


  </tr>
  @endforeach
</table>
{{ $roles->links() }}