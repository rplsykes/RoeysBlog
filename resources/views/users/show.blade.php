@extends('layout')

@section('content')

<h3> {{ $user->name }} </h3>

<ol class="breadcrumb">
  <li><a href="/dashboard">Dashboard</a></li>
  <li><a href="/users">Users</a></li>
  <li class="active"> {{ $user->name }} </li>
</ol>

<!-- Roles/Permissions -->
<div class="row">
	<div class="col-md-12">
		<h4> Permissions </h4>
		<hr />

		<table class="table table-striped table-hover">
		<tr>
			<th></th>
			<th> # </th>
			<th> Permission </th>
			<th> Description </th>
		</tr>
		@foreach ($permissions as $permission)
		<tr>
			<td><input type="checkbox" name="checked" 
				@if ( $user->hasRole($permission->name))
					checked 
				@endif
				>
			</td>
			<td>{{$permission->id}}</td>
			<td>{{$permission->view_name}}</td>
			<td>{{$permission->description}}</td>
		</tr>
		@endforeach
		</table>
	</div>
</div>
	
@endsection