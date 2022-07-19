<h1 class="mt-4 text-center">List of rooms <a class= "btn btn-outline-primary" href="{{url('/room/new')}}"> <i class="bi bi-plus-lg"></i></a>  <a class= "btn btn-outline-primary" href="{{url('/room/print')}}"> <i class="bi bi-printer"></i></a></h1> 
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