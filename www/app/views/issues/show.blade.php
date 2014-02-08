@extends('layouts.default')

@section('content')
	<div class="row">
		<div class="col-xs-6 col-xs-offset-3">
			<h3>{{ $issue->name }}</h3>
			<img src="" alt="" class="img-responsive"></img>
			<div>
				<p>{{ $issue->desc }}</p>
				<p>
					Submitted by 
					<span>{{ $issue->name }}</span>
				</p>
			</div>	
		</div>	
	</div>	