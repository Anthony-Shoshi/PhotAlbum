<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class albumController extends Controller
{
    public function index()
    {
        $album = Album::with('photo')->get();
    	return view('album.index')->with('album', $album);
    }

    public function create()
    {
    	return view('album.create');
    }

     public function store(Request $request)
    {
    	$this->validate($request,[
            'name' => 'required',
            'cover_photo' => 'required|max:1999'
        ]); 

            if($request->hasFile('cover_photo')) {

            $cover_photo = $request->file('cover_photo');

            $fileOriginalName = $cover_photo->getClientOriginalName();

            $fileNameOnly = pathinfo($fileOriginalName, PATHINFO_FILENAME);
            
            $fileExtention = $cover_photo->getClientOriginalExtension();

            $fileToStore = $fileNameOnly.'_'.time().'.'.$fileExtention;

            $path =  $cover_photo->storeAs('public/album_cover',$fileToStore);

        }

            $album = new Album();

            $album->name = $request->input('name');
            $album->description = $request->input('description');
            $album->cover_photo = $fileToStore;

            $album->save();

            return redirect('/album')->with('success','Album created !!!');
    }

    public function show($id)
    {
        $album = Album::with('photo')->where('id',$id)->get();
        return view('album.show')->with('album', $album);
    }

}
