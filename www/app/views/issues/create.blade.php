@extends('layouts.default')

@section('content')
	<div>
		<div>
			<div id="capture">
				<video id="video" autoplay></video>
				<img id="snapshot" src=""></img>
				<canvas id="canvas" style="display:none;"></canvas>
			</div>
			<button id="capture-button" disabled>Take Picture</button>
		</div>
		<label>Title</label>
		<input id="title"/>
	</div>
	
	<script>
		$(document).ready(function() {
			navigator.getUserMedia  = navigator.getUserMedia ||
                          navigator.webkitGetUserMedia ||
                          navigator.mozGetUserMedia ||
                          navigator.msGetUserMedia;

			var $video = $('#video');
			var image = document.getElementById('snapshot');
			var canvas = document.getElementById('canvas');
			var button = document.getElementById('capture-button');

			var onSuccess = function(stream) {
				$video.attr('src', window.URL.createObjectURL(stream));
				button.disabled = false;

				button.onclick =  function() {
					var width = $video.width(),
						height = $video.height();

					console.log('(' + width + ', ' + height + ')');

					var ctx = canvas.getContext('2d');
					canvas.width = width;
					canvas.height = height;

					ctx.drawImage($video.get(0), 0, 0, width, height);
					image.src = canvas.toDataURL('image/webp');
				};
			};

			var onFail = function(err) {
				alert('it broke');
			};

			navigator.getUserMedia({ video: true}, onSuccess, onFail);
		});
	</script>

	<div class="row">
		<div class="col-xs-6 col-xs-offset-3">
			<h3>Create New Issue</h3>
			{{ Form::open(array('url' => 'issues', 'method' => 'POST', 'files' => true)) }}
		        <fieldset>
		            {{ Form::label('photo', 'Select or take a picture!') }}
		            <p>
		                <span class="btn btn-link btn-file">
		                    <span class="btn-file-label">Browse for image...</span>{{ Form::file('photo', array('accept'=>'image/*')) }}
		                </span>
		            </p>
		            
		            <div class="form-group">
		                {{ Form::submit('Save Issue', array('class'=>'btn btn-primary')) }}
		            </div>
		        </fieldset>
		    {{ Form::close() }}
		</div>
	</div>
	<script src="{{ URL::to('js/pretty-file-upload.js') }}"></script>
@stop