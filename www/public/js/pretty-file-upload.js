function supportsLocalFiles() {
	return (window.File && window.FileReader && window.FileList && window.Blob);
}

$(document).on('change', '.btn-file :file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
});

$(document).ready( function() {
    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        $(this).parent().children('.btn-file-label').text(label);
        if(supportsLocalFiles()) {
        	console.log("supports local files");
        	var reader = new FileReader();
        	reader.readAsDataURL(this.files[0]);
        	reader.onload = function(event) {
        		console.log("loaded!");
        		var img = document.getElementById('snapshot');
        		img.src = event.target.result;
        	};
        }
    });
});