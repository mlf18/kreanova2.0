@extends('layouts.app')

@section('section')
	<div class="container">
		<div class="row">
				<h3>CHECK LIST KELENGKAPAN ADMINISTRASI KRENOVA 20018</h3>

				<div class="form-group">
					<hr>
					{!! Form::label('no', 'No') !!}
					{!! Form::text('no', old('no'), ['class'=>'form-control', 'placeholder' => 'Nomor']) !!}
				</div>

				<div class="form-group">
					<hr>
					{!! Form::label('kabupaten', 'Kabupaten/Kota') !!}
					{!! Form::text('kabupaten', old('kabupaten'), ['class'=>'form-control', 'placeholder' => 'kabupaten / kota']) !!}		
				</div>

				<div class="form-group">
					<hr>
					{!! Form::label('judul', 'Judul') !!}
					{!! Form::text('judul', old('judul'), ['class'=>'form-control', 'placeholder' => 'judul']) !!}		
				</div>
				<div class="form-group">
					{!! Form::checkbox('ada')}
				</div>


		</div>
	</div>
@endsection