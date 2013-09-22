@extends('master')

@section('container')
	<div class="login-container">
		{{ Form::open(array('url' => '/login')) }}
		<div class="input-group">
			{{ Form::label('email', 'Email:') }}
			{{ Form::text('email', NULL, array('class' => 'full')) }}
		</div>
		<div class="input-group">
			{{ Form::label('password', 'Password:') }}
			{{ Form::password('password', array('class' => 'full')) }}
		</div>
		{{ Form::submit('Sign in') }}
		{{ Form::close() }}
	</div>
@stop
