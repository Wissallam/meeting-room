<div class="card-header">
  <h1 class="text-center">Add a room</h1>
</div>
<div class="card-body">
<form action="{{url('/room/save')}}" class="form" method="post">
 @csrf
 
 <div class="mb-3">
   <label for="" class="form-label">number</label>
   <input type="decimal" class="form-control @error('number') is-invalid @enderror" name="number" value="{{old('number')}}">
   @error('number')
    <p class="text-danger"> {{$message}}</p>
   @enderror
 </div>
 <div class="mb-3">
  <label for="" class="form-label">name</label>
  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
  @error('name')
   <p class="text-danger"> {{$message}}</p>
  @enderror
</div>
 <div class="mb-3">
   <label for="" class="form-label">capacity</label>
   <input type="decimal" class="form-control @error('capacity') is-invalid @enderror" name="capacity" value="{{old('capacity')}}">
   @error('capacity')
    <p class="text-danger"> {{$message}}</p>
   @enderror
 </div>
 <div class="mb-3">
  <label for="" class="form-label">floor</label>
  <input type="decimal" class="form-control @error('floor') is-invalid @enderror" name="floor" value="{{old('floor')}}">
  @error('floor')
   <p class="text-danger"> {{$message}}</p>
  @enderror
</div>
<div class="mb-3">
  <label for="" class="form-label">color</label>
  <input type="text" class="form-control @error('color') is-invalid @enderror" name="color" value="{{old('color')}}">
  @error('color')
   <p class="text-danger"> {{$message}}</p>
  @enderror
</div>
<div class="mb-3">
  <label for="" class="form-label">invalid_from</label>
  <input type="date" class="form-control @error('invalid_from') is-invalid @enderror" name="invalid_from" value="{{old('invalid_from')}}">
  @error('invalid_from')
   <p class="text-danger"> {{$message}}</p>
  @enderror
</div>
<div class="mb-3">
  <label for="" class="form-label">invalid_to</label>
  <input type="date" class="form-control @error('invalid_to') is-invalid @enderror" name="invalid_to" value="{{old('invalid_to')}}">
  @error('invalid_to')
   <p class="text-danger"> {{$message}}</p>
  @enderror
</div>
 
 <div class="mb-3">
  <input type="submit" value="Save" class="btn btn-success">
 </div>
</form>

</div>
</div>