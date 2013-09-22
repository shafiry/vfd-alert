@extends('master')

@section('container')
	<p>Dashboard....</p>
        {{ Form::open(array('url' => '/volunteer/create')) }}
        {{ Form::text('name') }}
        {{ Form::text('phone', "xxx-xxx-xxxx") }}
        {{ Form::submit('New Volunteer!') }}
        {{ Form::close() }}
	
@stop
