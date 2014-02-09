@extends('layouts.default')

@section('content')
	<div class="row" style="margin-top:25px;">
		<div class="col-xs-12 col-sm-12 col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-1">
			<h3> Sign Up </h3>
			{{ Form::open(array('role' => 'form', 'url' => 'users', 'method' => 'POST')) }}
				<fieldset>
					<div class="form-group">
						{{ Form::label('name', 'name', array('class' => 'hidden-xs hidden-sm')) }}
						{{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'username')) }}
					</div>
					<div class="form-group">
						{{ Form::label('email', 'email', array('class' => 'hidden-xs hidden-sm')) }}
						{{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'email address')) }}
					</div>
					<div class="form-group">
						{{ Form::label('password', 'password', array('class' => 'hidden-xs hidden-sm'))}}
						{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'password')) }}
					</div>
					<div class="form-group">
						{{ Form::label('reenter-password', 're-enter password', array('class' => 'hidden-xs hidden-sm')) }}
						{{ Form::password('reenter-password', array( 'class' => 'form-control', 'placeholder' => 're-enter password'))}}
					</div>
				    <div class="form-group hidden-sm hidden-xs">
				        {{ Form::submit('Create User', array('class'=>'btn btn-primary pull-right')) }}
				    </div>
				    <div class="form-group hidden-lg hidden-md">
				        {{ Form::submit('Create User', array('class'=>'btn btn-primary btn-block')) }}
				    </div>
				</fieldset>
			{{ Form::close() }}
		</div>
	</div>
@stop
