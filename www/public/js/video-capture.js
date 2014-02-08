/*
	<div>
		<div>
			<div id="capture">
				<video id="video" autoplay></video>
				<img id="video-snapshot" src=""></img>
				<canvas id="canvas" style="display:none;"></canvas>
			</div>
			<button id="capture-button" disabled>Take Picture</button>
		</div>
		<label>Title</label>
		<input id="title"/>
	</div>
*/

$(document).ready(function() {
	navigator.getUserMedia  = navigator.getUserMedia ||
                  navigator.webkitGetUserMedia ||
                  navigator.mozGetUserMedia ||
                  navigator.msGetUserMedia;

	var $video = $('#video');
	var image = document.getElementById('video-snapshot');
	var canvas = document.getElementById('canvas');
	var button = document.getElementById('capture-button');

	var onSuccess = function(stream) {
		$video.attr('src', window.URL.createObjectURL(stream));
		button.disabled = false;

		button.onclick =  function() {
			var width = $video.width(),
				height = $video.height();

			canvas.width = width;
			canvas.height = height;

			canvas.getContext('2d').drawImage($video.get(0), 0, 0, width, height);
			image.src = canvas.toDataURL('image/webp');
		};
	};

	var onFail = function(err) {
		alert('it broke');
	};

	navigator.getUserMedia({ video: true}, onSuccess, onFail);
});