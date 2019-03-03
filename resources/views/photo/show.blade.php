@extends('layouts.app')
@section('content')
<div class="show">
<h2>{{$photo->title}}</h2>
<p>{{$photo->description}}</p>
<a href="/PhotoAlbum/public/album/show/{{$photo->album_id}}" class="btn btn-primary">Go Back</a>
<hr>
<br>
<img class="showpic" src="/PhotoAlbum/public/storage/photos/{{$photo->album_id}}/{{$photo->photo}}">
<br><br>
<form action="{{action('photoController@destroy',['id'=>$photo->id])}}" method="post">
	@csrf
	<input type="hidden" name="_method" value="DELETE">
	<input type="submit" class="btn btn-danger" value="Delete">
</form>
<hr>
<small>{{$photo->size}}</small>
</div>
@endsection