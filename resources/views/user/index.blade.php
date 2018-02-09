@extends('layouts.admin')

@section('section')

<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<a href="{{ route('users.create') }}" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span>Create</a>
		<table class="table" id="userTable">
		<table class="table">
			<thead>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>Date</th>
				<th>Role</th>
				<th>	</th>
			</thead>
			<tbody>
				<?php $no = 0; ?>
				@foreach ($user as $user)
					<tr>
						<td>{{ $no = $no +1 }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
						<td>
							@foreach ($user->roles as $r)
								{{ $r->name }},
							@endforeach
						</td>
						<td>
							<div class="box-button">
								<a href="{{ route('users.edit', $user->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
							</div>
							<div class="box-button">
	 							<form action="{{ route('users.destroy', $user->id) }}" method="POST">
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
@endsection
@section('scripts')
@include('user._js')
@endsection