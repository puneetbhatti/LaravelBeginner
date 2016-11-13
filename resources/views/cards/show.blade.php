@extends('layout')
@section('content')
<div class="row" style="margin-top:10px;">
<h1 class="col-md-7">{{$card->title}}</h1>
<a href="/" class="btn btn-info col-md-5">Back To Listing</a>
</div>
<ul class="list-group">
@foreach($notes as $element)
	<li class="list-group-item">{{$element->note}}</li>
@endforeach
</ul>	
<hr>
<h3>Add New Note</h3>
<form method="POST" action="/card/{{$card->id}}/note">
	<div class="form-group">
		<textarea name="note" class="form-control mb10"></textarea>
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary"value="Add New">
	</div>
</form>	
<div class="col-md-12">
@if(count($errors))
	<div class="alert alert-warning">
	<ul>
	@foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
</div> 

@endif
@stop