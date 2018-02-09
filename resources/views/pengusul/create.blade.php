@extends('layouts.admin')

@section('section')

	{!! Form::open(array('route' => 'pengusul.store', 'method'=>'POST')) !!}

		@include('pengusul._form')

	{!! Form::close() !!}

@endsection
