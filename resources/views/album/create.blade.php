@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong><center><h2>Create Album</h2></center></strong></div>

                <div class="card-body">
                    <form action="{{action('albumController@store')}}" method="post" enctype="multipart/form-data">
                    	@csrf
					  <div class="form-group">
					    <input type="text" name="name" class="form-control" aria-describedby="emailHelp" placeholder="Enter Album Name">
					  </div>
					  <div class="form-group">
					    <input type="text" name="description" class="form-control" placeholder="Enter Description">
					  </div>
					  <div class="form-group">
					    <input type="file" name="cover_photo" class="form-control">
					  </div>
					  <div class="form-group">
					    <button type="submit" class="btn btn-success">Create</button>
					    <a class="btn btn-primary float-right" href="{{url('album')}}">Go Back</a>
					  </div>
					  
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection