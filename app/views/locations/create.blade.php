@extends('layouts.default')

@section('content')

<div class="row">
	<div class="col-md-6">
		<h1>New Location</h1>

		@include('layouts.partials.errors')

		{{ Form::open(['route' => 'locations.store']) }}
		{{ Form::hidden('id', Auth::user()->id) }}
		<!-- Username Form Input -->
			<div class="form-group">
				{{ Form::label('name', 'Name:') }}
				{{ Form::text('name', null, ['class' => 'form-control']) }}
			</div>

			<!-- Address Form Input -->
			<div class="form-group">
				{{ Form::label('address', 'Address:') }}
				{{ Form::text('address', null, ['class' => 'form-control']) }}
			</div>

			<!-- Website Form Input -->
			<div class="form-group">
				{{ Form::label('website', 'Website URL:') }}
				{{ Form::text('website', null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::submit('Create', ['class' => 'btn btn-primary'])}}
			</div>
		{{ Form::close() }}
	</div>
</div>

@stop

