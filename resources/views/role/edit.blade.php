<div class="card-header">
    <h1 class="text-center">Edit role</h1>
 </div>
<div class="card-body">
  <form action="{{url('/role/update')}}" class="form" method="post">
   @csrf
   <input type="hidden" value="{{$role->id}}" name="id">

   <div class="mb-3">
    <label for="" class="form-label">name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$role->name}}">
    @error('name')
     <p class="text-danger"> {{$message}}</p>
    @enderror
  </div>
   
   
   <div class="mb-3">
    <input type="submit" value="Save" class="btn btn-success">
   </div>
  </form>

</div>
</div>