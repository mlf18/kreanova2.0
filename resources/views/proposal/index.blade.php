@extends('layouts.admin')

@section('section')

				<a href="{{ route('proposals.create') }}" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> Create</a>
				<table class="table table-bordered" id="poposalsTable" >
						<thead>
						<th>#</th>
						<th>abstrak</th>
						<th>latar_belakang </th>
						<th>maksud</th>
						<th>manfaat</th>
						<th>spek_teknik</th>
						<th>keunggulan</th>
						<th>penerapan</th>
						<th>biaya_produksi</th>
						<th>prospek_bisnis</th>
						<th>proposal_name</th>
						<th>spk_name</th>
						<th>lampiran_name</th>
						<th>Date</th>
						<th>	</th>

					</thead>
					<tbody>
						<?php $no = 0;?>
						@foreach ($proposal as $p)
							<tr>
								<td>{{ $no = $no +1 }}</td>
								<th>{{ $p->abstrak }}</th>
								<th>{{ $p->latar_belakang  }}</th>
								<th>{{ $p->maksud }}</th>
								<th>{{ $p->manfaat }}</th>
								<th>{{ $p->spek_teknik }}</th>
								<th>{{ $p->keunggulan }}</th>
								<th>{{ $p->penerapan }}</th>
								<th>{{ $p->biaya_produksi }}</th>
								<th>{{ $p->prospek_bisnis }}</th>
								<th>{{ $p->proposal_name }}</th>
								<th>{{$p->spk_name}}<a href="spk/{{ $p->spk_name }}" download="{{$p->spk_name}}"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-download"> Download</i></button></a> </th>
								<th>{{ $p->lampiran_name }}</th>
								<th>{{ $p->Date }}{{ date('d/m/Y', strtotime($p->created_at)) }}</th>

								<td>
									<div class="box-button">
										<a href="{{ route('proposals.edit', $p->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
									</div>
										<div class="box-button">
			 							<form action="{{ route('proposals.destroy', $p->id) }}" method="POST">
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

@endsection
