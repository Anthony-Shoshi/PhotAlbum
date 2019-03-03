@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong><center><h2>Upload Photo</h2></center></strong></div>

                <div class="card-body">
                    <form action="{{action('photoController@store',['id'=>$album_id])}}" method="post" enctype="multipart/form-data">
                    	@csrf
	                  <div class="form-group">
					    <input type="file" name="photo" class="form-control">
					  </div>
					  <div class="form-group">
					    <input type="text" name="title" class="form-control" aria-describedby="emailHelp" placeholder="Enter Photo Title">
					  </div>
					  <input type="hidden" name="album_id" value="{{$album_id}}">
					  <div class="form-group">
					    <input type="text" name="description" class="form-control" placeholder="Enter Description">
					  </div>
					  <div class="form-group">
					    <button type="submit" class="btn btn-success">Upload</button>
					    <a class="btn btn-primary float-right" href="/PhotoAlbum/public/album/show/{{$album_id}}">Go Back</a>
					  </div>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection