<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Room;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class TestController extends Controller
{
    public function index()
    {
        $photos = Photo::all();
        $rooms= Room::all();
        return view('listroom',compact('photos','rooms'));
    }
}
