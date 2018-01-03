@extends('layouts.master')

@section('content')

<div class="col-sm-8 blog-main">

	<h1>Login</h1>

	<form method="post" action="/login">
	    {{csrf_field()}}

		<div class=form-group>
			<label name="email">Email</label>
			<input type="email" name="email" class="form-control" id="email">
		</div>

		<div class=form-group>
			<label name="password">Password</label>
			<input type="password" name="password" class="form-control" id="password">
		</div>

		<div class="form-group">
  			<button type="submit" class="btn btn-default">Submit</button>
        </div>

        @include('layouts.errors')

	</form>


</div>

@endsection