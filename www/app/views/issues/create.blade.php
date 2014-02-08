@extends('layouts.default')

@section('content')
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
		                <img id="snapshot" src=""></img>
		            </p>

		            <div class="form-group">
						{{ Form::label('name','Title') }}
						{{ Form::text('name') }}
					</div>
					<div class="form-group">
						{{ Form::label('desc','Description') }}
						{{ Form::textarea('desc') }}
		            </div>
		            
		            <div class="form-group">
		                {{ Form::submit('Save Issue', array('class'=>'btn btn-primary')) }}
		            </div>
		        </fieldset>
		    {{ Form::close() }}
		</div>
	</div>
	<script src="{{ URL::to('js/pretty-file-upload.js') }}"></script>
@stop