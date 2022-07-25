<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Room;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;


class PhotoController extends Controller
{
   /* public function index()
    {
        $rooms=Room::all();
        $photos=Photo::paginate(20);
        return view('admin.photo.index',compact('photos','rooms'));
    }
   */

    public function new()
    {   
        $rooms=Room::all(); 
        return view('admin.photo.new',compact('rooms'));
    }

    
    public function save(Request $request)
    {
      $validation=$request->validate(
        [
           // 'path'=>'required|string',
            'rooms_id'=>'required',
        ]
    );
       /* $input=$request->all();
        if ($request->hasFile('image')) {
            $dest_path='public/images/rooms';
            $image = $request->file('image');
            $path = $request->file('image')->store('images');
        }
        Photo::create($input);
        
          $data = Photo::create([
            'path' => $image_path,
            'rooms_id' =>$room,
        ]);
        */
        $image_path = $request->file('image')->store('image','public');
        $room=$request->get('rooms_id');
      
        $photo = new Photo();

        $photo->path=$image_path;
        $photo->rooms_id=$request->get('rooms_id');
        $photo->save();

        Alert::success('photo', 'The photo has been saved succesefully !');

         return redirect('/room');
    }

    public function edit($id)
    {  $photo=Photo::find($id);
        $rooms=Room::all(); 

       return view('admin.photo.edit',compact('photo','rooms'));
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
