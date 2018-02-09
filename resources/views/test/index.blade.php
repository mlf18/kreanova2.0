@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<a href="{{ route('role.create') }}" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> Create</a>
			<table class="table" id="roleTable" >
					<thead>
					<th>#</th>
					<th>Name</th>
					<th>Date</th>
					<th>	</th>
				</thead>
				<tbody>
					<?php $no = 0;?>
					@foreach ($role as $r)
						<tr>
							<td>{{ $no = $no +1 }}</td>
							<td>{{ $r->name }}</td>

							<td>{{ date('d/m/Y', strtotime($r->created_at)) }}</td>

							<td>
								<div class="box-button">
									<a href="{{ route('role.edit', $r->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
								</div>
									<div class="box-button">	 							
		 							<form action="{{ route('role.destroy', $r->id) }}" method="POST">
		 							{{ csrf_field() }}
		 							<input name="_method" type="hidden" value="DELETE">
									<button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>Delete</button>
									</form>
								</div>				
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>	
		</div>
	</div>
</div>
@endsection
@section('scripts')
@include('role._js')
@endsection