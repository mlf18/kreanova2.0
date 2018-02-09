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

	{!! Form::model($edit = new \App\User, ['url'=> route('users.store'), 'method' => 'post']) !!}
		@include('user._Form', ['submitButton' => 'Add User'])
	
@endsection