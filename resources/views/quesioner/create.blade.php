@extends('layouts.admin')

@section('section')

		{!! Form::open(array('route' => 'quesioner.store', 'method'=>'POST')) !!}
			@include('quesioner._form')
		{!! form::close() !!}

			
@endsection