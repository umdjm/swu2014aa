@extends('layouts.default')

@section('content')
	<div class="row" id="content">
		<div class="col-lg-6 col-lg-offset-3 col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
			<h3>What's your issue?</h3>
			{{ Form::open(array('id' => 'form', 'role' => 'form', 'url' => 'issues', 'method' => 'POST', 'files' => true)) }}
		        <fieldset>
		            <div class="form-group">
						{{ Form::label('name','Title', array('class' => 'hidden-xs hidden-sm')) }}
						{{ Form::text('name', null, array('class' => 'form-control', 'placeholder' =>'title', 'required' => true)) }}
					</div>
					<div class="form-group">
						{{ Form::label('desc','Description', array('class' => 'hidden-xs hidden-sm')) }}
						{{ Form::textarea('desc', null, array('class' => 'form-control', 'rows' => 2, 'placeholder' => 'description...')) }}
			        </div>
					<div class="col-lg-9 col-lg-offset-1 col-md-9 col-md-offset-1">
			            <div class="form-group">
			            	<img id="snapshot" class="img-responsive" src="" style="margin:0 auto;"></img>
			                <span class="btn btn-primary btn-file btn-block">
			                    <span class="btn-file-label">Add a picture</span>
			                    {{ Form::file('photo', array('accept'=>'image/*')) }}
			                </span>
			            </div>
			            <div class="form-group">
			                {{ Form::submit('Submit Issue', array('class'=>'btn btn-custom btn-block')) }}
			            </div>
			         </div>
		            {{ Form::hidden('latitude', null, array('id' => 'latitude')) }}
		            {{ Form::hidden('longitude', null, array('id' => 'longitude')) }}
		        </fieldset>
		    {{ Form::close() }}
		</div>
	</div>
	<script src="{{ URL::to('js/pretty-file-upload.js') }}"></script>
	<script>
		function initMap() {
			var marker;

			function onSuccess(data) {
				var lat = data.coords.latitude;
				var lng = data.coords.longitude;

				$('#latitude').val(lat);
				$('#longitude').val(lng);
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