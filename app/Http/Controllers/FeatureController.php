<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;
//PDF
use Barryvdh\DomPDF\Facade\Pdf;
//ALERT
use RealRashid\SweetAlert\Facades\Alert;
class ProductController extends Controller

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$features=Feature::all();
        $features=Feature::paginate(4);
        $rooms=Room::all();
        return view('feature.index',compact('features','rooms'));
    }

    public function new()
    {   $rooms=Room::all();
         return view('feature.new',compact('rooms'));
      
    }

    // print feature list using dompdf
    public function print()
    {
        $features=Feature::all();
        $rooms=Room::all();
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
            'rooms_id'=>'required',
        ]
    );
        Feature::create($request->all());
        Alert::success('Feature', 'The feature has been saved succesefully !');

         return redirect('/feature');
    }

    public function edit($id)
    {  $feature=Feature::find($id);
       $rooms=Room::all();
       return view('feature.edit',compact('feature','rooms'));
    }
    
    public function update(Request $request)
    {
       $feature=Feature::find($request->get('id'));
       $validation=$request->validate(
        [
            'name'=>'required',
            'description'=>'required|string',
            'rooms_id'=>'required',
        ]
      
    );
       $feature->name=$request->get('name');
       $feature->description=$request->get('description');
       
       $feature->save();
       Alert::success('Feature', 'The feature has been updated succesefully !');
       return redirect('/feature')->with('message','Modifié avec succès');
    }

    
    public function delete($id)
    {
       $feature=Feature::find($id);
     
       $feature->delete();
       Alert::success('Feature', 'The feature has been deleted succesefully !');
       return redirect('/feature')->with('message','Supprimé avec succès');
    }
  
}