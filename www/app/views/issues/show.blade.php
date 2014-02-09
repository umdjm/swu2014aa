@extends('layouts.default')

@section('content')
	<div class="row">
		<div class="col-xs-6 col-xs-offset-3">
			<h3>{{ $issue->name }}</h3>
			{{ Form::open(array('id' => 'form', 'role' => 'form', 'url' => 'tracks', 'method' => 'POST', 'files' => true)) }}
        {{ Form::hidden('issue_id', $issue->id, array('id' => 'issue_id')) }}
				{{ Form::submit('Track This Issue', array('class'=>'btn btn-primary pull-right')) }}
	    {{ Form::close() }}

			<div id="google-map"></div>
			<img src="{{ $issue->photo }}" alt="" class="img-responsive"></img>
			<div>
				<p>{{ $issue->desc }}</p>
				<p class="priority{xp">{{ $issue->priority_string() }} Priority
				<p>
					Submitted by 
					<span>{{ $issue->user->name }}</span>
				</p>
			</div>	
		</div>	
	</div>	
	<script>
		function initMap() {
			var marker;

			google.maps.visualRefresh = true;

			var lat = {{ $issue->latitude }};
			var lng = {{ $issue->longitude }};

			var options = {
				zoom: 18,
				center: new google.maps.LatLng(lat, lng),
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				mapTypeControl: false,
				streetViewControl: false
			};

			var mapElem = document.getElementById('google-map'); 
			var map = new google.maps.Map(mapElem, options);

			marker = new google.maps.Marker({
				position: new google.maps.LatLng(lat, lng),
				map: map
			});

		}

		document.addEventListener('DOMContentLoaded', initMap, false);
	</script>
@stop