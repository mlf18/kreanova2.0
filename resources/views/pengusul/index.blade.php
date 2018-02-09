@extends('layouts.admin')

@section('section')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<a href="{{ route('pengusul.create') }}" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> Create</a>
				<table class="table" id="roleTable" >
						<thead>
						<th>#</th>
						<th>kategori</th>
						<th>nama </th>
						<th>alamat</th>
						<th>kabupaten</th>
						<th>pekerjaan</th>
						<th>jk</th>
						<th>no_telpp</th>
						<th>email</th>
						<th>nama</th>
						<th>judul</th>
						<th>Date</th>
						<th>	</th>
					</thead>
					<tbody>
						<?php $no = 0;?>
						@foreach ($Profil as $p)
							<tr>
								<td>{{ $no = $no +1 }}</td>
								<th>{{ $p->kategori }}</th>
								<th>{{ $p->nama  }}</th>
								<th>{{ $p->alamat }}</th>
								<th>{{ $p->kabupaten }}</th>
								<th>{{ $p->pekerjaan }}</th>
								<th>{{ $p->jk }}</th>
								<th>{{ $p->no_telpp }}</th>
								<th>{{ $p->email }}</th>
								<th>{{ $p->nama }}</th>
								<th>{{ $p->judul }}</th>
								<th>{{ $p->Date }}</th>
								<td>{{ date('d/m/Y', strtotime($p->created_at)) }}</td>

								<td>
									<div class="box-button">
										<a href="{{ route('pengusul.edit', $p->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
									</div>
										<div class="box-button">	 							
			 							<form action="{{ route('pengusul.destroy', $p->id) }}" method="POST">
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