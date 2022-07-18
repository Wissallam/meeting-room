<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meeting;
//PDF
use Barryvdh\DomPDF\Facade\Pdf;
//ALERT
use RealRashid\SweetAlert\Facades\Alert;
class ProductController extends Controller

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$meetings=Meeting::all();
        $meetings=Meeting::paginate(4);
        $rooms=Room::all();
        $users=User::all();
        return view('meeting.index',compact('meetings','rooms','users'));
    }

    public function new()
    {   $rooms=Room::all();
        $users=CategoUserry::all();
         return view('meeting.new',compact('rooms,users'));
    }

    // print feature list using dompdf
    public function print()
    {
        $features=Feature::all();
        $rooms=Room::all();
        $users=User::all();
        // options
        Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf = Pdf::loadView('feature.print', compact('features','rooms'));
        return $pdf->download('feature.pdf');

  
    }
    public function save(Request $request)
    {
      $validation=$request->validate(
        [
            'name'=>'required',
            'description'=>'required|string',
            'date_start'=>'required',
            'date_end'=>'required',
            'nb_guest'=>'required',
            'type_event'=>'required',
            'rooms_id'=>'required',
            'users_id'=>'required',
            'need_it_support'=>'required',
            'need_media'=>'required',

        ]
    );
        Meeting::create($request->all());
        Alert::success('Meeting', 'The meeting has been saved succesefully !');

         return redirect('/meeting');
    }

    public function edit($id)
    {  $meeting=Meeting::find($id);
       $rooms=Room::all();
       $users=User::all();
       return view('meeting.edit',compact('meeting','rooms','users'));
    }
    
    public function update(Request $request)
    {
       $meeting=Meeting::find($request->get('id'));
       $validation=$request->validate(
        [
            'name'=>'required',
            'description'=>'required|string',
            'date_start'=>'required',
            'date_end'=>'required',
            'nb_guest'=>'required',
            'type_event'=>'required',
            'rooms_id'=>'required',
            'users_id'=>'required',
            'need_it_support'=>'required',
            'need_media'=>'required',
        ]
      
    );
       $feature->name=$request->get('name');
       $feature->description=$request->get('description');
       $feature->date_start=$request->get('date_start');
       $feature->date_end=$request->get('date_end');
       $feature->nb_guest=$request->get('nb_guest');
       $feature->type_event=$request->get('type_event');
       $feature->need_itsupport=$request->get('need_itsupport');
       $feature->need_media=$request->get('need_media');
       $feature->save();
       Alert::success('Meeting', 'The meeting has been updated succesefully !');
       return redirect('/meeting')->with('message','Modifié avec succès');
    }

    
    public function delete($id)
    {
       $meeting=Meeting::find($id);
     
       $meeting->delete();
       Alert::success('Meeting', 'The meeting has been deleted succesefully !');
       return redirect('/meeting')->with('message','Supprimé avec succès');
    }
  
}