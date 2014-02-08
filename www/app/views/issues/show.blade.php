@extends('layouts.default')

@section('content')
	<div class="row">
		<div class="col-xs-6 col-xs-offset-3">
			<h3>{{ $issue->name }}</h3>
			<p><i>{{ $issue->status }}</i></p>
			<p>{{ $issue->desc }}</p>
			


		</div>
	</div>
	<script src="{{ URL::to('js/pretty-file-upload.js') }}"></script>
@stop