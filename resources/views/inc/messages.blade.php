@if(count($errors) > 0)
	@foreach($errors->all() as $error)
	<div class="alert alert-danger" style="width:77%;margin-left: 145px;">
		<center>{{$error}}</center>
	</div>
	@endforeach
@endif


@if(session('success'))
	<div class="alert alert-success" style="width:77%;margin-left: 145px;">
		<center>{{session('success')}}</center>
	</div>
@endif