@extends('layouts.default')

@section('content')
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-lg-3 col-lg-offset-3">
			<h3> Create a user here. </h3>
			{{ Form::open(array('role' => 'form', 'url' => 'users', 'method' => 'POST')) }}
				<fieldset>
					<div class="form-group">
						{{ Form::label('name', 'name', array('class' => 'hidden-xs hidden-sm')) }}
						{{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'user name')) }}
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
						{{ Form::password('reenter-pasword', array( 'class' => 'form-control', 'placeholder' => 're-enter password'))}}
					</div>
				    <div class="form-group">
				        {{ Form::submit('Create User', array('class'=>'btn btn-primary pull-right')) }}
				    </div>
				</fieldset>
			{{ Form::close() }}
		</div>
	</div>
@stop
