<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Photo;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;



class RoomController extends Controller
{
    public function index()
    {
        $contents = Storage::get('0a9pqkXpotfYmMW4SJJOTfwdzmAkMNjHSkj7S7D0.jpg');
        $rooms=Room::paginate(20);
        $photos=Photo::paginate(20);
        return view('admin.room.index',compact('rooms','photos','contents'));
    }

    public function new()
    {   
         return view('admin.room.new');
    }

    
    public function save(Request $request)
    {
      $validation=$request->validate(
        [
            'number'=>'required|numeric',
            'name'=>'required|string',
            'capacity'=>'required|numeric',
            'floor'=>'required|numeric',
            'color'=>'required|string',
            'invalid_from'=>'date',
            'invalid_to'=>'date',

        ]
    );
        $room = Room::create($request->all());
        $room->save();
        Alert::success('Room', 'The room has been saved succesefully !');

         return redirect('/room');
    }

    public function edit($id)
    {  $room=Room::find($id);
       return view('admin.room.edit',compact('room'));
    }

    public function update(Request $request)
    {
       $rooms=Room::find($request->get('id'));
       $validation=$request->validate(
        [
            'number'=>'required|numeric',
            'name'=>'required|string',
            'capacity'=>'required|numeric',
            'floor'=>'required|numeric',
            'color'=>'required|string',
            'invalid_from'=>'date',
            'invalid_to'=>'date',
        ]

    );
    $rooms->number=$request->get('number');
    $rooms->name=$request->get('name');
    $rooms->capacity=$request->get('capacity');
    $rooms->floor=$request->get('floor');
    $rooms->color=$request->get('color');
    $rooms->invalid_from=$request->get('invalid_from');
    $rooms->invalid_to=$request->get('invalid_to');
    Alert::success('room', 'The room has been modifiedd succesefully !');
    return redirect('/room');
    }


    public function delete($id)
    {
       $rooms=Room::find($id);
       $rooms->delete();
       Alert::success('room', 'The room has been deleted succesefully !');
       return redirect('/room');
    }
}
