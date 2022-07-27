<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Departement;



class CalendarController extends Controller
{
   public function showcalendar () {
        return view('admin.calender');
    }
   public function newmeet(){
    /*alert()->html('Html Title', ' 
    <form action="{{url("/departement/save")}}" class="form" method="post">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">name</label>
      <input type="text" class="form-control">
    <div class="mb-3">
     <input type="submit" value="Save" class="btn btn-success">
    </div>
   </form> ')->persistent(true,false);
  */
    return view('admin.calender');
   } 

}