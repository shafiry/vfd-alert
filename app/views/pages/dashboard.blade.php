@extends('master')

@section('container')
	<p>Dashboard....</p>
	<p>Volunteer</p>
        {{ Form::open(array('url' => '/volunteer/create')) }}
        {{ Form::text('name') }}
        {{ Form::text('phone', "xxx-xxx-xxxx") }}
        {{ Form::submit('New Volunteer!') }}
        {{ Form::close() }}

	<p>Incident</p>
        {{ Form::open(array('url' => '/incident/create')) }}
        {{ Form::text('title') }}
        {{ Form::text('description', "(optional)") }}
	{{ Form::text('coordinates') }}
        {{ Form::submit('New Incident!') }}
        {{ Form::close() }}
             
	
@stop
