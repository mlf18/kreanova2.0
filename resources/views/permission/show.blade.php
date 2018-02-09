@extends('layouts.app')

@section('content')
<div class="row"> 
	<div class="col-md-4">
		<div class="form-group">
		<!-- <a href="{{ route('permission.edit', $permission->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a> -->
		
		</div>
		<div class="form-group">
			{!! Form::label('name', 'Name Permission') !!}
			{!! Form::text('name', $permission->name, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			@foreach ($permission->roles as $role)
			{!! Form::label('name', 'Name Role') !!}
			{!! Form::text ('name', $role->name, ['class'=>'form-control']) !!}
			@endforeach
			</div>
	</div>
</div>


@endsection