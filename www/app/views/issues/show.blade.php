@extends('layouts.default')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h3>
					{{ $issue->name }}
					@if( Auth::user()->canEdit($issue) )
						<a href="{{ URL::to( '/issues/' . $issue->id . '/edit' ) }}" class="btn btn-primary btn-large pull-right">
						<i class="fa fa-pencil-square-o"></i>
						Edit
					@endif
				</a>
				</h3>
				<img src="{{ $issue->photo }}" alt="" class="img-responsive"></img>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div id="google-map"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<p>
					<span></span>
					Submitted by 
					<span>{{ $issue->user->name }}</span>
				</p>
				@include('partials/issue-status', array('issue'=>$issue))
			</div>	
		</div>
		<div class="row">
		 	<div class="col-md-6 col-md-offset-3">
				{{ $issue->desc }}
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				@include('partials.comments', array('issue_id' => $issue->id, 'comments' => $issue->comments))
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