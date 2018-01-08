@extends('layouts.master')

@section('content')

<div class="col-sm-8 blog-main">

	<h1>Register</h1>

	<form method="post" action="/register">
	    {{csrf_field()}}

		<div class=form-group>
			<label name="name">Name</label>
			<input type="text" name="name" class="form-control" id="name" required>
		</div>

		<div class=form-group>
			<label name="email">Email</label>
			<input type="email" name="email" class="form-control" id="email" required>
		</div>

		<div class=form-group>
			<label name="password">Password</label>
			<input type="password" name="password" class="form-control" id="password" required>
		</div>

        <div class=form-group>
			<label name="password_confirmation">Confirm Password</label>
			<input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
		</div>

		<div class="form-group">
  			<button type="submit" class="btn btn-default">Submit</button>
        </div>

        @include('layouts.errors')

	</form>


</div>

@endsection