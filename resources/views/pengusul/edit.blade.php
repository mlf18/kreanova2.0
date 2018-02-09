@extends('layouts.app')
@section('content')

	@if (count($errors) >0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all()as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	{!! Form::model($edit, ['route' => ['pengusul.update', $edit->id], 'method'=>'PATCH', 'id'=>'formpengusul']) !!}
		@include('pengusul._form', ['submitButton' => 'Update pengusul'])

	{!! Form::close() !!}
@endsection