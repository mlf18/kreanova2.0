@extends('layouts.admin')

@section('section')
	@if (count($errors) > 0)
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	{!! Form::model($edit = new \App\Permission, ['url'=> route('permission.store')]) !!}
		@include('permission._Form' , ['submitButton' => 'Add Permission'])

	{!! Form::close() !!}

@stop