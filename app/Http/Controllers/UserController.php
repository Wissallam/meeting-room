<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\User;
use App\Models\Departement;
use App\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users=User::paginate(4);
        $departements=Departement::all();
        $roles=Role::all();
        return view('user.index',compact('users','departements','roles'));
    }

    public function new()
    {   $departements=Departement::all();
        $roles=Role::all();
         return view('user.new',compact('departements,roles'));
    }

    
    public function save(Request $request)
    {
      $validation=$request->validate(
        [
            'firstname'=>'required|string',
            'lastname'=>'required|string',
            'email'=>'email|unique:users|required'
            'roles_id'=>'required',
            'departements_id'=>'required',
            'password'=>'required',
        ]
    );
        $user = new User();

        $user->firstname=$request->get('firstname');
        $user->lastname=$request->get('lastname');
        $user->email=$request->get('email');
        $user->roles_id=$request->get('roles_id');
        $user->departements_id=$request->get('departements_id');
        $user->password=Hash::make($request->get('password'));

        $user->save();

        Alert::success('user', 'The user has been saved succesefully !');

         return redirect('/user');
    }

    public function edit($id)
    {  $user=User::find($id);
       $departements=Departement::all();
       $roles=Role::all();
       return view('user.edit',compact('user','departements','roles'));
    }

    public function update(Request $request)
    {
       $user=User::find($request->get('id'));
       $validation=$request->validate(
        [
            'firstname'=>'required|string',
            'lastname'=>'required|string',
            'email'=>'email|unique:users|required'
            'roles_id'=>'required',
            'departements_id'=>'required',
            'password'=>'required',
        ]

    );
    $user->firstname=$request->get('firstname');
    $user->lastname=$request->get('lastname');
    $user->email=$request->get('email');
    $user->roles_id=$request->get('roles_id');
    $user->departements_id=$request->get('departements_id');
    $user->password=Hash::make($request->get('password'));
    Alert::success('user', 'The user has been modifiedd succesefully !');
    return redirect('/user');
    }


    public function delete($id)
    {
       $user=User::find($id);
       $user->delete();
       Alert::success('user', 'The user has been deleted succesefully !');
       return redirect('/user');
    }
}
