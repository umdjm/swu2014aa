@extends('layouts.default')

@section('content')
	<div class="row">
		<div class="col-xs-6 col-xs-offset-3">
			
			<h3>Create New Issue</h3>
			{{ Form::open(array('role' => 'form', 'url' => 'issues', 'method' => 'POST', 'files' => true)) }}
		        <fieldset>
		        	<div class="form-group">
		        		<div id="google-map"></div>
		        	</div>
		            <div class="form-group">
		            	<img id="snapshot" class="img-responsive" src=""></img>
		                <span class="btn btn-primary btn-file">
		                    <span class="btn-file-label">Add a picture</span>
		                    {{ Form::file('photo', array('accept'=>'image/*')) }}
		                </span>
		            </div>
		            <div class="form-group">
						{{ Form::label('name','Title') }}
						{{ Form::text('name', null, array('class' => 'form-control')) }}
					</div>
					<div class="form-group">
						{{ Form::label('desc','Description') }}
						{{ Form::textarea('desc', null, array('class' => 'form-control')) }}
		            </div>
		            
		            <div class="form-group">
		                {{ Form::submit('Save Issue', array('class'=>'btn btn-primary pull-right')) }}
		            </div>
		        </fieldset>
		    {{ Form::close() }}
		</div>
	</div>
	<script src="{{ URL::to('js/pretty-file-upload.js') }}"></script>
	<script>
		function initMap() {
			var marker;

			function onSuccess(data) {
				google.maps.visualRefresh = true;

				var lat = data.coords.latitude;
				var lng = data.coords.longitude;

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
			}

			function onFail(err) {
				alert('failure');
				console.log(err.message);
			}

			getCurrentPosition(onSuccess, onFail);
		}

		document.addEventListener('DOMContentLoaded', initMap, false);
	</script>
@stop