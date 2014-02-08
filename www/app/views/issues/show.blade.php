@extends('layouts.default')

@section('content')
	<!-- TODO how does the geolocation work? -->
	<div class="row">
		<div class="col-xs-6 col-xs-offset-3">
			<h3>{{ $issue.name }}</h3>
			<img src="" alt="" class="img-responsive"></img>
			<div>
				<p>{{ $issues.desc }}</p>
				<p>
					Submitted by 
					<span>{{ $issues.user.name }}</span>
					<!-- TODO How do I get the name of the user -->
				</p>
			</div>	
		</div>	
	</div>	
@stop