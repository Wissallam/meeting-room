<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Room;


class PhotoController extends Controller
{
    public function index()
    {
        $rooms=Room::all();
        $photos=Photo::paginate(4);
        return view('photo.index',compact('photos','rooms'));
    }

    public function new()
    {   
        $rooms=Room::all(); 
        return view('photo.new',compact('photos','rooms'));
    }

    
    public function save(Request $request)
    {
      $validation=$request->validate(
        [
            'path'=>'required|string',
            'rooms_id'=>'required',


        ]
    );
        $photo = Photo:create($request->all());
        $photo->save();

        Alert::success('photo', 'The photo has been saved succesefully !');

         return redirect('/photo');
    }

    public function edit($id)
    {  $photo=Photo::find($id);
        $rooms=Room::all(); 

       return view('photo.edit',compact('photo','rooms'));
    }

    public function update(Request $request)
    {
       $photos=Photo::find($request->get('id'));
       $validation=$request->validate(
        [
            'path'=>'required|string',
            'rooms_id'=>'required',
        ]

    );
    $photos->path=$request->get('path');
    $photos->rooms_id=$request->get('rooms_id');
    Alert::success('photo', 'The photo has been modifiedd succesefully !');
    return redirect('/photo');
    }


    public function delete($id)
    {
       $photos=Photo::find($id);
       $photos->delete();
       Alert::success('photo', 'The photo has been deleted succesefully !');
       return redirect('/photo');
    }
}
