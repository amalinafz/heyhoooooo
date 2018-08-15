@extends('layouts.app')

@section('content')
<div class="row">
	

	<div class="col-md-3">
		@foreach($post as $p)
			    <li class="list-group-item">
			    	
			    	<h2>{{$p->title}}</h2>
			    	<p class="blog-post-meta"> {{$p->created_at->toDayDateTimeString()}} </p>
			    	<br>
			    	<p>{{$p->body}}</p>
			    </li>
			    @endforeach
	</div>
</div>
@endsectionss