@extends('layouts.app')

@section('content')

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{!! Form::model($edit, ['route' => ['role.update', $edit->id],'method'=>'PATCH','id'=>'formrole']) !!}
	@include('role._Form', ['submitButton' => 'Update Role'])
{!! Form::close() !!}
@endsection