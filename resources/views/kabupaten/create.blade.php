@extends('layouts.admin')

@section('section')
	<div class="container">
		<div class="row">
			{!! Form::open(array('route' => 'bupati.store', 'method'=>'POST')) !!}
				<h3>FORMULIR KUESIONER BUPATI/WALIKOTA PELOPOR INOVASI DAERAH</h3>

				@include('kabupaten._form')

				{{ Form::submit('Submit', array('class' => 'btn btn-success')) }}

			{!! Form::Close() !!}

			</div>
			}
		</div>
	</div>
@endsection
