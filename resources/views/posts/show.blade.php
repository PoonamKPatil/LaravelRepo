@extends('layouts.master')

@section('content')

	<div class="col-sm-8 blog-main">

		<h1>{{$post->title}}</h1>

		{{$post->body}}
		

    <hr>
		<div class="comment">

			<ul class="list-group">

			      @foreach($post->comments as $comment)

			      	<li class="list-group-item">

				      	<strong>

				      		{{ $comment->created_at->diffForHumans() }}: &nbsp;

				      	</strong>
				        
				        {{ $comment->body }}

			        </li>

			      @endforeach
	        </ul>

	    </div>

	    <hr>

	    <div class="card">

		    <div class="card-block">

			    <form method="POST" action="/posts/{{$post->id}}/comment">

			    	{{ csrf_field()}}

				    <div class="form-group">
				    	<label for="comment">Comment</label>
			    		<textarea id="comment" name="comment" class="form-control" placeholder="Your comment here!"></textarea> 
			  		</div>

			    	<div class="form-group">
		  		    	<button type="submit" class="btn btn-default">Add Comment</button>
		            </div>

			    </form>

			    @include('layouts.errors')
			    
		    </div>

	    </div>

	</div>

@endsection