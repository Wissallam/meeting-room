<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
//PDF
use Barryvdh\DomPDF\Facade\Pdf;
//ALERT
use RealRashid\SweetAlert\Facades\Alert;


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
        Setting::create($request->all());
       // $settings=new Setting;
        Alert::success('Setting', 'The setting has been saved succesefully !');

         return redirect('/setting');
    }

    public function edit($id)
    {  $setting=Setting::find($id);
       return view('setting.edit',compact('setting'));
    }
    
    public function update(Request $request)
    {
       $setting=Setting::find($request->get('id'));
       $validation=$request->validate(
        [
            'name'=>'required',
            'organisation-name'=>'required',
            'email_itsupport'=>'required',
            'need_media_team'=>'required',
            'need_table_service'=>'required',
        ]
      
    );
       $setting->name=$request->get('name');
       $setting->organisation_name=$request->get('organisation_name');
       $setting->email_itsupport=$request->get('email_itsupport');
       $setting->need_media_team=$request->get('need_media_team');
       $setting->need_table_service=$request->get('need_table_service');
       $setting->save();
       Alert::success('Setting', 'The setting has been updated succesefully !');
       return redirect('/setting')->with('message','Modifié avec succès');
    }

    
    public function delete($id)
    {
       $setting=Setting::find($id);
     
       $setting->delete();
       Alert::success('Setting', 'The setting has been deleted succesefully !');
       return redirect('/setting')->with('message','Supprimé avec succès');
    }
  
}

