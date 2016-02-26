@extends('layout')

@section('content')

<h3> Dashboard </h3>

<ol class="breadcrumb">
  <li class="active">Dashboard</li>
</ol>

<!-- Begin Dashboard Buttons -->
<div class="row">

	<!-- Manage Users -->
	@if ( Auth::user()->hasRole('manage_users') )
		<div class="col-md-3">
			<a href="/users">
				<div class="panel panel-sexy">
					<div class="panel-body">
						<img src="/images/users.svg" />
					</div>

					<div class="panel-footer">
						Manage Users
					</div>
				</div>
			</a>
		</div>
	@endif

	<!-- Manage Posts -->
	@if ( Auth::user()->hasRole('manage_posts') )
	<div class="col-md-3">
		<a href="/admin/posts">
			<div class="panel panel-sexy">
				<div class="panel-body">
					<img src="/images/posts.svg" />
				</div>

				<div class="panel-footer">
					Manage Posts
				</div>
			</div>
		</a>
	</div>
	@endif

	<!-- Manage Comments -->
	@if ( Auth::user()->hasRole('manage_comments') )
	<div class="col-md-3">
		<a href="/admin/posts">
			<div class="panel panel-sexy">
				<div class="panel-body">
					<img src="/images/comments.svg" />
				</div>

				<div class="panel-footer">
					Manage Comments
				</div>
			</div>
		</a>
	</div>
	@endif

	<!-- Settings -->
	@if ( Auth::user()->hasRole('settings') )
	<div class="col-md-3">
		<a href="/admin/posts">
			<div class="panel panel-sexy">
				<div class="panel-body">
					<img src="/images/settings.svg" />
				</div>

				<div class="panel-footer">
					Settings
				</div>
			</div>
		</a>
	</div>
	@endif

</div>
<!-- End Dashboard Buttons -->

@endsection