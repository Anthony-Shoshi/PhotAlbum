@extends('layouts.app')
@section('content')
@if(count($album))
	@foreach($album as $albums)
		<h2>{{$albums->name}}</h2>
	@endforeach
	<a href="{{url('/album')}}" class="btn btn-default">Go Back</a>
	<a href="/PhotoAlbum/public/photo/create/{{$albums->id}}" class="btn btn-primary">Upload Photo to album</a>
@endif	
	<hr>

	@foreach($album as $a)
	@if(count($a->photo))
	@foreach($a->photo as $photos)
	<div class="gallery">
		<a target="_blank" href="/PhotoAlbum/public/photo/{{$photos->id}}">
		<img src="/PhotoAlbum/public/storage/photos/{{$photos->album_id}}/{{$photos->photo}}" alt="{{$photos->title}}" width="600" height="400">
		</a>
	<div class="desc">{{$photos->description}}</div>
	</div>
	@endforeach	
@endif
@endforeach
@endsection