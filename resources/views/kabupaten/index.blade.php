@extends('layouts.admin')

@section('section')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<a href="{{ route('bupati.create') }}" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> Create</a>
				<table class="table" id="roleTable" >
						<thead>
						<th>#</th>
						<th>nama_kabupaten</th>
						<th>alokasi_anggaran</th>
						<th>perda </th>
						<th>mou</th>
						<th>lomba_kab</th>
						<th>pameran_kab</th>
						<th>jumlah_lombakab</th>
						<th>jumlah_pamerankab</th>
						<th>pemenang_provinsi</th>
						<th>	</th>

					</thead>
					<tbody>
						<?php $no = 0;?>
						@foreach ($bupati as $p)
							<tr>
								<td>{{ $no = $no +1 }}</td>
								<td>{{ nama_kabupaten}}</th>
								<th>{{ alokasi_anggaran}}</th>
								<th>{{ perda  }}</th>
								<th>{{ mou }}</th>
								<th>{{ lomba_kab }}</th>
								<th>{{ pameran_kab }}</th>
								<th>{{ jumlah_lombakab }}</th>
								<th>{{ jumlah_pamerankab }}</th>
								<th>{{ pemenang_provinsi }}</th>
								<td>{{ date('d/m/Y', strtotime($p->created_at)) }}</td>

								<td>
									<div class="box-button">
										<a href="{{ route('bupati.edit', $p->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
									</div>
										<div class="box-button">
			 							<form action="{{ route('bupati.destroy', $p->id) }}" method="POST">
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
