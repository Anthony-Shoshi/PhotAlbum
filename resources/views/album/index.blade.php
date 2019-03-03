@extends('layouts.app')
@section('content')
	<h3>Album</h3>
</head>
<body>
@if(count($album))
@foreach($album as $albums)
<div class="gallery">
  <a target="_blank" href="{{action('albumController@show',['id'=>$albums->id])}}">
    <img src="storage/album_cover/{{$albums->cover_photo}}" alt="{{$albums->name}}" width="600" height="400">
  </a>
  <div class="desc">{{$albums->description}}</div>
</div>
@endforeach
@else
<h3>No Album</h3>
@endif
@endsection