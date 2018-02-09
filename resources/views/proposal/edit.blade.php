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
{!! Form::model($edit, ['route' => ['permission.update', $edit->id],'method'=>'PATCH','id'=>'formpermission']) !!}
	
	@include('permission._Form', ['submitButton' => 'Update Permission '])
{!! Form::close() !!}
@endsection