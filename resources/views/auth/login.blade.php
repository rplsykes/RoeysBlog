@extends('layout')

@section('content')
	
	<div class="login-container">

		<!-- Display Errors -->
		@if ( count($errors) > 0)
			<div class="alert alert-danger">
				<p> <strong> Holy Shit Batman! Errors!</strong></p>

				<ul>
					@foreach($errors->all() as $error) 
						<li>{{ $error }}</li>
					@endforeach
				</ul>

			</div>
		@endif

		<!-- Login Form -->
		<div class="panel panel-default">
			<div class="panel-heading"><h4>Login</h4></div>
			<div class="panel-body">
				<form action="/login" method="post">

					<input type="hidden" name="_token" value="{{ csrf_token() }}" />

					<div class="row">
						<div class="col-md-12">
							<label for="name">Name:</label>
							<input type="text" id="name" name="name" placeholder="Your username" maxlength="30"
								class="form-control"/>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<label for="password">Password:</label>
							<input type="password" id="password" name="password" placeholder="Your password" maxlength="35"
								class="form-control"/>
						</div>
					</div>

					<div class="row center">
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary">Login</button>
							<button class="btn btn-default">Nevermind</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>

@endsection