@extends('layouts.app')

@section('content')

{!! Form::open(['url'=> route('role.store')]) !!}
	@include('role._Form')

{!! Form::close() !!}
@endsection