<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//PDF
use Barryvdh\DomPDF\Facade\Pdf;
//ALERT
use RealRashid\SweetAlert\Facades\Alert;
class ProductController extends Controller

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$settings=Setting::all();
        $settings=Setting::paginate(4);
        return view('setting.index',compact('settings'));

    }

    public function new()
    {   $settings=Setting::all();
        return view('setting.new',compact('settings'));
    }

    // print feature list using dompdf
    public function print()
    {
        $settings=Setting::all();
       
        // options
        Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf = Pdf::loadView('setting.print', compact('settings'));
        return $pdf->download('feature.pdf');

  
    }
    public function save(Request $request)
    {
      $validation=$request->validate(
        [
            'name'=>'required',
            'organisation-name'=>'required',
            'email_itsupport'=>'required',
            'need_media_team'=>'required',
            'need_table_service'=>'required',
            
        ]
    );
        Meeting::create($request->all());
        Alert::success('Meeting', 'The meeting has been saved succesefully !');

         return redirect('/meeting');
    }

    public function edit($id)
    {  $meeting=Meeting::find($id);
       return view('meeting.edit',compact('meeting'));
    }
    
    public function update(Request $request)
    {
       $meeting=Meeting::find($request->get('id'));
       $validation=$request->validate(
        [
            'name'=>'required',
            'organisation-name'=>'required',
            'email_itsupport'=>'required',
            'need_media_team'=>'required',
            'need_table_service'=>'required',
        ]
      
    );
       $meeting->name=$request->get('name');
       $meeting->organisation_name=$request->get('organisation_name');
       $meeting->email_itsupport=$request->get('email_itsupport');
       $meeting->need_media_team=$request->get('need_media_team');
       $meeting->need_table_service=$request->get('need_table_service');
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

