@extends('layout')
@section('content')
<h1>Card List</h1>
<ul class="list-group">
@foreach($card as $element)
	<li class="list-group-item"><a href="/card/{{$element->id}}">{{$element->title}}</a>
	<p>{{$element->description}}</p>
	</li>
@endforeach
</ul>	
<hr>
<h3>Add Card</h3>
<form method="POST" action="/card">
	<div class="form-group">
		<input type="text" name="title" class="form-control" placeholder="Title" value="{{old('title')}}">		
	</div>
	<div class="form-group">
		<textarea name="description" class="form-control mb10" placeholder="Description"></textarea>
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary" value="Add New Card">
	</div>
</form>	
@if(count($errors))
	<div class="alert alert-warning">
	<ul>
	@foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
@endif	
@stop