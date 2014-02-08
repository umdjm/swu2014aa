@extends('layouts.default')

@section('content')
	<div class="row">
		<div class="col-xs-6 col-xs-offset-3">
			<h3>Create New Issue</h3>
			{{ Form::open(array('role' => 'form', 'url' => 'issues', 'method' => 'POST', 'files' => true)) }}
		        <fieldset>
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
@stop