@extends('layout')

@section('content')

<h3> Users </h3>

<ol class="breadcrumb">
  <li><a href="/dashboard">Dashboard</a></li>
  <li class="active">Users</li>
</ol>

<!-- User List Buttons -->
<div class="row">
	<div class="col-md-12">
		<button>Create New User</button>
		<button>Lock/Unlock User(s)</button>
		<button>Activate/Deactive User(s)</button>
	</div>
</div>

<!-- User List Table --> 
<div class="row">
	<div class="col-md-12">
		<table class="table table-striped table-hover">
			<tr>
				<th></th>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th></th>
				<th></th>
			</tr>
			@foreach($users as $user)
				<tr>
					<td> <input type="checkbox" name="checked" value="{{$user->id}}" /></td>
					<td> {{ $user->id }} </td>
					<td> {{ $user->name }} </td>
					<td> {{ $user->email }} </td>
					<td> 
						@if ($user->locked )
							<img src="/images/lock-icon.svg" width="24px" height="24px"
							title="Account Unlocked" />
						@else 
							<img src="/images/open-padlock.svg" width="24px" height="24px"
							title="Account Locked" />
						@endif
					</td>
					<td>
						@if ($user->active)
							<img src="/images/tick.svg" width="24px" height="24px"
							title="Account Active" />
						@else
							<img src="/images/cross.svg" width="24px" height="24px"
							title="Account Inactive" />
						@endif
					</td>
				</tr>
			@endforeach
		</table>
	</div>
</div>

@endsection