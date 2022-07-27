@extends('dashboard')
 <!-- roomuser-->

 <link rel="stylesheet" href="{{ asset('roomsuser/flipcard.css')}}">
 <script src="{{ asset('roomsuser/flipcard.js')}}">
   </script>
@section('content')
<div class="row">
    <div class="row flex-grow">
        <div class="col-12 grid-margin stretch-card">
              <div class="d-sm-flex justify-content-between align-items-start">
                

                    @foreach ($photos as $photo )
                    

                    <!-- BEGIN: card -->
                    <div class="card" class="wrapper" data-effect="zoom">
                      <button class="card__save  js-save" type="button">
                        <i class="fa  fa-bookmark"></i>
                       </button>
                      <figure  class="card__image">
                        <img src="{{asset('/storage/'.$photo->path)}}" >                      
                    </figure>
                      <div class="card__header">
                        <figure class="card__profile">
                            <img src="{{asset('/storage/'.$photo->path)}}" >                      
                        </figure>
                      </div>
                      <div class="card__body">
                        <h3 class="card__name">{{$photo->room->name}}</h3>
                        <p class="card__job">meeting-room</p>
                        <p class="card__bio"> {{$photo->room->name}}</p>
                      </div>
                      <div class="card__footer">
                        <p class="card__date">june 2022</p>
                        <p class=""></p>
                      </div>
                    </div>
                    <!-- END: card -->
                    @endforeach

                    
             



              </div>
        </div>
      
      </div>
    </div>
@endsection