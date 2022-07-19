<div class="card-header">
    <h1 class="text-center">Add a user</h1>
 </div>
<div class="card-body">
  <form action="{{url('/user/save')}}" class="form" method="post">
   @csrf
   <input type="hidden" value="{{$user->id}}" name="id">
   <div class="mb-3">
     <label for="" class="form-label">firstname</label>
     <input type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{old('firstname')}}">
     @error('firstname')
      <p class="text-danger"> {{$message}}</p>
     @enderror
   </div>
   <div class="mb-3">
    <label for="" class="form-label">lastname</label>
    <input type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{old('lastname')}}">
    @error('lastname')
     <p class="text-danger"> {{$message}}</p>
    @enderror
  </div>
   <div class="mb-3">
     <label for="" class="form-label">email</label>
     <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">
     @error('email')
      <p class="text-danger"> {{$message}}</p>
     @enderror
   </div>
   <div class="mb-3">
    <label for="" class="form-label">Role</label>
    <select name="roles_id" id="" class="form-control  @error('roles_id') is-invalid @enderror">
    <option selected>--select a role--</option>
      @foreach ($roles as $role)
      <option value="{{$role->id}}">{{$role->name}}</option> 
      @endforeach
    </select>
    @error('roles_id')
    <p class="text-danger">{{$message}}</p>
  @enderror  
  </div> 
  <div class="mb-3">
    <label for="" class="form-label">Departement</label>
    <select name="departements_id" id="" class="form-control  @error('departements_id') is-invalid @enderror">
    <option selected>--select a departement--</option>
      @foreach ($departements as $departement)
      <option value="{{$departement->id}}">{{$departement->name}}</option>  
      @endforeach
    </select>
    @error('departements_id')
    <p class="text-danger">{{$message}}</p>
  @enderror  
  </div> 
   <div class="mb-3">
     <label for="" class="form-label">password</label>
     <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{old('password')}}">
     @error('password')
      <p class="text-danger"> {{$message}}</p>
     @enderror
   </div>
   
   <div class="mb-3">
    <input type="submit" value="Save" class="btn btn-success">
   </div>
  </form>

</div>
</div>