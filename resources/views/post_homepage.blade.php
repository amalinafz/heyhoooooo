@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-8">
		<form class="form-horizontal" action="/post" method="POST">
			@csrf
			<!-- Text input-->
			<div class="form-group">
			  <div class="col-md-12">
			  	<label> Title</label>
			  	<input id="textinput" name="title" type="text" placeholder="What's up?" class="form-control input-md">
			  	<br>
			  	<label> Body</label>
			  	<input id="textinput" name="body" type="text" placeholder="Been longing to write?" class="form-control input-md">
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <div class="col-md-4">
			    <button class="btn btn-primary">Post</button>
			  </div>
			</div>
		</form>
	</div>

	<div class="col-md-3">
		@foreach($post as $p)
			    <li class="list-group-item">
			    	<a href="/posts/{{$p->id}}">
			    		<h5>{{$p->title}}</h5>
			    	</a>
			    	<p>{{$p->body}}</p>
			    </li>
			    @endforeach
	</div>
</div>
@endsection