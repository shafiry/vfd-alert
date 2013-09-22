@extends('master')

@section('container')

	<div class="incidents">
		<h2 class="section-title">Incidents</h2>
		{{ Form::open(array('url' => '/incident/create')) }}
		{{ Form::text('title') }}
		{{ Form::text('description', "(optional)") }}
		{{ Form::text('coordinates') }}
		{{ Form::submit('New Incident!') }}

	</div>
	<div class="volunteers">
		<h2 class="section-title">Volunteers</h2>
		{{ Form::open(array('url' => '/volunteer/create')) }}
		{{ Form::text('name') }}
		{{ Form::text('phone', "xxx-xxx-xxxx") }}
		{{ Form::submit('New Volunteer!') }}
		{{ Form::close() }}
	</div>

@stop
