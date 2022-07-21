<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departement;
//PDF
use Barryvdh\DomPDF\Facade\Pdf;
//ALERT
use RealRashid\SweetAlert\Facades\Alert;
<<<<<<< HEAD
class DepartementController extends Controller



=======

class DepartementController extends Controller
>>>>>>> bffbdf6a5e795a7da269d1248567ee85f8c17d7a
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //$departements=Departement::all();
       $departements=Departement::paginate(4);
       return view('departement.index',compact('departements'));
    }

    public function new()
    { 
        return view('departement.new');
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
       return view('departement.edit',compact('departement'));
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