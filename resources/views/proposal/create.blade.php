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

	{!! Form::model($edit = new \App\Proposal, ['url'=> route('proposals.store'), 'method' => 'post', 'files' => true, 'files2' => true, 'files3' => true ]) !!}

		 {!! csrf_field() !!}
		@include('proposal._form', ['submitButton' => 'Add Proposal'])		
	

	{!! Form::close() !!}
@stop