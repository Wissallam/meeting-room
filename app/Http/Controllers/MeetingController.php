<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Meeting;
use App\Models\Room;
use App\Models\User;
//PDF
use Barryvdh\DomPDF\Facade\Pdf;
//ALERT
use RealRashid\SweetAlert\Facades\Alert;
class MeetingController extends Controller


{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public function index()
   // {
       // $meetings=Meeting::all();
       // $userid=Auth::user()->id;
       // $meetings=Meeting::paginate(20);
        //$rooms=Room::all();
        //$users=User::all();
        //return view('meeting.index',compact('meetings','rooms','users'));
   // }
    public function index()
    {
        $user_id=Auth::user()->id;
        $user=User::find($user_id);
        $meetings= $user->meeting;
        return view('usermeetings',compact('meetings'));
    }

    public function profile()
    {
        $profile=Auth::user()->profile;
      
        return view('profiluser',compact('profile'));
    }

    public function new()
    {   $rooms=Room::all();
        $users=User::all();
         return view('meeting.new',compact('rooms','users'));
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
            'date-start'=>'required',
            'date-end'=>'required',
            'nb_guest'=>'required',
            'type_event'=>'required',
            'rooms_id'=>'required',
            'users_id'=>'required',
            'need_itsupport'=>'required',
            'need_media'=>'required',

        ]
    );
        Meeting::create($request->all());
       // $meetings=new Meeting;
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
            'date-start'=>'required',
            'date-end'=>'required',
            'nb_guest'=>'required',
            'type_event'=>'required',
            'rooms_id'=>'required',
            'users_id'=>'required',
            'need_it_support'=>'required',
            'need_media'=>'required',
        ]
      
    );
       $meeting->name=$request->get('name');
       $meeting->description=$request->get('description');
       $meeting->date_start=$request->get('date-start');
       $meeting->date_end=$request->get('date-end');
       $meeting->nb_guest=$request->get('nb_guest');
       $meeting->type_event=$request->get('type_event');
       $meeting->need_itsupport=$request->get('need_itsupport');
       $meeting->need_media=$request->get('need_media');
       $meeting->save();
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