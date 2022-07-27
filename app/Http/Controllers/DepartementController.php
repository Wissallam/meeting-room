<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departement;
use App\Models\User;

//PDF
use Barryvdh\DomPDF\Facade\Pdf;
//ALERT
use RealRashid\SweetAlert\Facades\Alert;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //$departements=Departement::all();
       $departements=Departement::paginate(20);
       $users=User::all();
       //return view('departement.index',compact('departements'));
       return view('admin.departement.index',compact('departements','users'));
    }

    public function new()
    { 
        return view('admin.departement.new');
    }

    // print departement list using dompdf
    public function print()
    {
        $departements=Departement::all();
        // options
        Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf = Pdf::loadView('departement.print', compact('departements'));
        return $pdf->download('product.pdf');

  
    }
    public function save(Request $request)
    {
      $validation=$request->validate(
        [
            'name'=>'required',
           
        ]
    );
        Departement::create($request->all());
      //  $departements=new Departement;
        Alert::success('Departement', 'The departement has been saved succesefully !');

         return redirect('/departement');
    }

    public function edit($id)
    {  $departement=Departement::find($id);
       return view('admin.departement.edit',compact('departement'));
    }
    
    public function update(Request $request)
    {
       $departement=Departement::find($request->get('id'));
       $validation=$request->validate(
        [
            'name'=>'required',
            
        ]
      
    );
       $departement->name=$request->get('name');
       $departement->save();
       Alert::success('Departement', 'The departement has been updated succesefully !');
       return redirect('/departement')->with('message','Modifié avec succès');
    }

    
    public function delete($id)
    {
       $departement=Departement::find($id);
     
       $departement->delete();
       Alert::success('Departement', 'The departement has been deleted succesefully !');
       return redirect('/departement')->with('message','Supprimé avec succès');
    }
  
}