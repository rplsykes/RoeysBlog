@extends('layout')

@section('content')

<h3> Dashboard </h3>

<!-- Begin Dashboard Buttons -->
<div class="row">

	<!-- Manage Posts -->
	<div class="col-md-3">
		<a href="/admin/posts">
			<div class="panel panel-default">
				<div class="panel-body">
					Manage Posts
				</div>
			</div>
		</a>
	</div>

</div>
<!-- End Dashboard Buttons -->


@endsection