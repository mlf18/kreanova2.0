@extends('layouts.admin')

@section('section')

{!! Form::open(['url'=> route('role.store')]) !!}
	@include('role._Form', ['submitButton' => 'Add Role'])
{!! Form::close() !!}

@endsection