<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;


class RoleController extends Controller
{
    public function index()
    {
        $roles=Role::paginate(4);
        return view('role.index',compact('roles'));
    }

    public function new()
    {   
         return view('role.new');
    }

    
    public function save(Request $request)
    {
      $validation=$request->validate(
        [
           
            'name'=>'required|string',

        ]
    );
        $role = Role::create($request->all());
        $role->save();

        Alert::success('role', 'The role has been saved succesefully !');

         return redirect('/role');
    }

    public function edit($id)
    {  $role=Role::find($id);
       return view('role.edit',compact('role'));
    }

    public function update(Request $request)
    {
       $roles=Role::find($request->get('id'));
       $validation=$request->validate(
        [
            'name'=>'required|string',
          
        ]

    );
    $roles->name=$request->get('name');
    Alert::success('role', 'The role has been modifiedd succesefully !');
    return redirect('/role');
    }


    public function delete($id)
    {
       $roles=Role::find($id);
       $roles->delete();
       Alert::success('role', 'The role has been deleted succesefully !');
       return redirect('/role');
    }
}
