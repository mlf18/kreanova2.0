
				<div class="form-group">
					<hr>
					{!! Form::select('profil_id', $profil, null,  ['class'=>'form-control']) !!}	
				</div>

				<div class="form-group">
					<hr>
					{!! Form::textarea('abstrak', null, ['class'=>'form-control', 'placeholder' => 'abstrak ']) !!}		
				</div>
				<div class="form-group">
					<hr>
					{!! Form::textarea('latar_belakang', null, ['class'=>'form-control', 'placeholder' => 'latar belakang ']) !!}		
				</div>
				<div class="form-group">
					<hr>
					{!! Form::textarea('maksud', null, ['class'=>'form-control', 'placeholder' => 'maksud ']) !!}		
				</div>
				<div class="form-group">
					<hr>
					{!! Form::textarea('manfaat', null, ['class'=>'form-control', 'placeholder' => 'manfaat ']) !!}		
				</div>

				<div class="form-group">
					<hr>
					{!! Form::textarea('spek_teknik', null, ['class'=>'form-control', 'placeholder' => 'Spesifikasi Teknis ']) !!}		
				</div>


				<div class="form-group">
					<hr>
					{!! Form::textarea('keunggulan', null, ['class'=>'form-control', 'placeholder' => 'Keunggulan bila dibandingkan dengan penemuan yang terdahulu ']) !!}		
				</div>

				<div class="form-group">
					<hr>
					{!! Form::textarea('penerapan', null, ['class'=>'form-control', 'placeholder' => 'Penerapan pada Masyarakat dan Dunia Industri ']) !!}		
				</div>
				
				<div class="form-group">
					<hr>
					{!! Form::textarea('biaya_produksi', null, ['class'=>'form-control', 'placeholder' => 'Perhitungan Biaya Produksi ']) !!}		
				</div>

				<div class="form-group">
					<hr>
					{!! Form::text('prospek_bisnis', null, ['class'=>'form-control', 'placeholder' => 'Prospek Bisnis / Komersialisasi ']) !!}		
				</div>

				<h3>Kelengkapan Dokumen</h3>
				<div class="form-group">
					<hr>
					{!! Form::label('proposal_name', 'Upload Proposal (.pdf file)') !!}
					{!! Form::file('proposal_name', array('class' => 'form-control')) !!}
				
				</div>
				
				<div class="form-group">
					<hr>
					{!! Form::label('spk_name', 'Surat Pernyataan Keaslian (.pdf file)') !!}
					{!! Form::file('spk_name', array('class' => 'form-control')) !!}
				
				</div>
				<div class="form-group">
					<hr>
					{!! Form::label('lampiran_name', 'Lampiran : FotoCopy Pengenal dan Daftar Riwayat Hidup (.pdf file)') !!}
					{!! Form::file('lampiran_name', array('class' => 'form-control')) !!}
				
				</div>
				
		
					
       			{!! Form::submit($submitButton, ['class' => 'btn btn-Success']) !!}		
