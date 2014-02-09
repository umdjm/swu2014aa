@extends('layouts.default')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h3>{{ $issue-> name }}</h3>
				<img id="snapshot" class="img-responsive" src="{{ $issue->photo }}"></img>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div id="google-map"></div>
				<p>
					Submitted by 
					<span>{{ $issue->user->name }}</span>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				{{ Form::open(array('id' => 'form', 'role' => 'form', 'url' => 'issues/' . $issue->id, 'method' => 'PUT', 'files' => true )) }}
					<fieldset>
			            <div class="form-group">
							{{ Form::label('name','Title') }}
							{{ Form::text('name', $issue->name, array('class' => 'form-control')) }}
						</div>
						<div class="form-group">
							{{ Form::label('desc','Description') }}
							{{ Form::textarea('desc', $issue->desc, array('class' => 'form-control', 'rows' => 2)) }}
				        </div>
				        @if ( Auth::user()->role == 'admin')
				            <div class="form-group">
								{{ Form::label('priority','Priority') }}
								{{ Form::radio('priority', 3, $issue->priority >= 3) }}
								Low
								{{ Form::radio('priority', 2, $issue->priority == 2) }}
								Medium
								{{ Form::radio('priority', 1, $issue->priority <= 1) }}
								High
							</div>
							<div class="form-group">
								{{ Form::label('status', 'Status') }}
								{{ Form::select('status', array('new' => 'New', 'active' => 'Active', 'closed' => 'Closed'), $issue->status)}}
							</div>
						@else
							@include('partials.issue-status', array('issue'=>$issue))
						@endif
						{{ Form::hidden('latitude', $issue->latitude, array('id'=>'latitude')) }}
						{{ Form::hidden('longitude', $issue->longitude, array('id'=>'longitude')) }}
						<div class="form-group">
							{{ Form::submit('Update Issue', array('class' => 'btn btn-primary pull-right'))}}
						</div>
					</fieldset>
				{{ Form::close() }}
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
				map: map,
				draggable: true
			});

			google.maps.event.addListener(
			    marker,
			    'drag',
			    function() {
			        $('#latitude').val(marker.position.lat());
			        $('#longitude').val(marker.position.lng());
			    }
			);
		}

		document.addEventListener('DOMContentLoaded', initMap, false);
	</script>
@stop