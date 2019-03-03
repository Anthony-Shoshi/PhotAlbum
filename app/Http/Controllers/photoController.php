<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Photo;

class photoController extends Controller
{
    public function create($album_id)
    {
    	return view('photo.create')->with('album_id',$album_id);
    }

    public function store(Request $request,$album_id)
    {
    	$this->validate($request,[
            'title' => 'required',
            'photo' => 'required|max:1999'
        ]); 
    	
    	$photoOriginalName = $request->file('photo')->getClientOriginalName();
    	$photoNameOnly = pathinfo($photoOriginalName, PATHINFO_FILENAME);
    	$photoExtension = $request->file('photo')->getClientOriginalExtension();
    	$photoToStore = $photoNameOnly.'_'.time().'.'.$photoExtension;
    	$path = $request->file('photo')->storeAs('public/photos/'.$request->input('album_id'),$photoToStore);

		$photo = new Photo;
		$photo->album_id = $request->input('album_id');
		$photo->photo = $photoToStore;
		$photo->title = $request->input('title');
		$photo->description = $request->input('description');
		$photo->size = $request->file('photo')->getClientSize();

		$photo->save();

        return redirect('/album/show/'.$request->input('album_id'))->with('success','Photo Upoloaded successfully !!!');
    }

    public function show($id)
    {
        $photo = Photo::find($id);

        return view('photo.show')->with('photo',$photo);
    }

    public function destroy($id)
    {
        $photo = Photo::find($id);

        if (Storage::delete('public/photos/'.'$photo->album_id'.'/'.'$photo->photo')) {
            
            $photo->delete();

            return redirect('/')->with('success','Photo Deleted !!!');
        }

        
    }
}
