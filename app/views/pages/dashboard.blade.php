@extends('master')

@section('container')

	<div class="incidents">
		<h2 class="section-title">Incidents</h2>
		
		<ul>
			@foreach($dispatcher->incidents as $incident)
				<li>{{ $incident->title }}</li>
			@endforeach
		</ul>

		<hr>
		{{ Form::open(array('url' => '/incident/create')) }}
		<div class="input-group">
			{{ Form::text('title', FALSE, array('placeholder' => 'Title')) }}
		</div>
		<div class="input-group">
			{{ Form::text('description', FALSE, array('placeholder' => 'Description')) }}
		</div>
		<div class="input-group">
			{{ Form::text('coordinates', FALSE, array('placeholder' => 'Coordinates')) }}
		</div>
		{{ Form::submit('Add Incident') }}
		{{ Form::close() }}
	</div>
	<div class="volunteers">
		<h2 class="section-title">Volunteers</h2>
		<ul>
			@foreach($dispatcher->volunteers as $volunteer)
				<li>{{ $volunteer->name }}</li>
			@endforeach
		</ul>

		<hr>
		{{ Form::open(array('url' => '/volunteer/create')) }}
		<div class="input-group">
			{{ Form::text('name', NULL, array('placeholder' => 'Name')) }}
		</div>
		<div class="input-group">
			{{ Form::text('phone', NULL, array('placeholder' => 'Phone Number')) }}
		</div>
		{{ Form::submit('Add Volunteer') }}
		{{ Form::close() }}
	</div>

@stop