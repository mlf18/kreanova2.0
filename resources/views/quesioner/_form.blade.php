<div class="container">

				<div class="row">
						<h3>FORMULIR KUESIONER TEMUAN KRENOVA</h3>
						<p>
							<div class="form-group">
								<hr>
								{!! Form::select('profil_id', $profil, null,  ['class'=>'form-control']) !!}	
							</div>
						</p>
						<div class="form-group">
							<hr>
							<h4>ORISINALITAS DAN KEPIONIRAN</h4>
							{!! Form::label('temuan_asli', 'Apakah temuan ini merupakan hasil temuan asli? ') !!}
							{!! Form::text('temuan_asli', old('temuan_asli'), ['class'=>'form-control', 'placeholder' => 'jawaban singkat']) !!}
							{!! Form::label('sudah_ada', 'Apakah sudah ada alat sejenis yang sudah ada? ') !!}
							{!! Form::text('sudah_ada', old('sudah_ada'), ['class'=>'form-control', 'placeholder' => 'jawaban singkat']) !!}
							{!! Form::label('waktu_produksi', 'Apakah temuan saudara/i merupakan hasil pengembangan ide orang lain? ') !!}
							{!! Form::text('waktu_produksi', old('waktu_produksi'), ['class'=>'form-control', 'placeholder' => 'jawaban singkat']) !!}
							{!! Form::label('ide_orang', 'Apakah temuan saudara/i merupakan hasil pengembangan ide orang lain? ') !!}
							{!! Form::text('ide_orang', old('ide_orang'), ['class'=>'form-control', 'placeholder' => 'jawaban singkat']) !!}
							{!! Form::label('asal_usul', 'Darimanakah asal-usul ide temuan? ') !!}
							{!! Form::text('asal_usul', old('asal_usul'), ['class'=>'form-control', 'placeholder' => 'jawaban singkat']) !!}	
						</div>
						<div class="form-group">
							<hr>
							<h4>PENERAPAN</h4>
							<hr>
							<h5>Implementasi</h5>
							{!! Form::label('komersial', 'Apakah sudah dipersiapkan untuk komersial /dijual? ') !!}
							{!! Form::text('komersial', old('komersial'), ['class'=>'form-control', 'placeholder' => 'jawaban singkat']) !!}
							{!! Form::label('komersial_pihak', 'Dimana/oleh siapa? ') !!}
							{!! Form::text('komersial_pihak', old('komersial_pihak'), ['class'=>'form-control', 'placeholder' => 'jawaban singkat']) !!}
							<h5>Penerapan</h5>
							{!! Form::label('penarapan', 'Apakah temuan saudara sudah diterapkan? ') !!}
							{!! Form::text('penarapan', old('penarapan'), ['class'=>'form-control', 'placeholder' => 'jawaban singkat']) !!}
							{!! Form::label('pelaku_penerapan', 'Dimana/oleh siapa? ') !!}
							{!! Form::text('pelaku_penerapan', old('pelaku_penerapan'), ['class'=>'form-control', 'placeholder' => 'jawaban singkat']) !!}
							{!! Form::label('cakupan_penerapan', 'Cakupan/Skala Penerapan (Kab/Kota, Provinsi, Nasional ') !!}
							{!! Form::text('cakupan_penerapan', old('cakupan_penerapan'), ['class'=>'form-control', 'placeholder' => 'jawaban singkat']) !!}
							

						</div>
						<div class="form-group">
							<hr>
							<h4>MANFAAT</h4>
							<hr>
							<h5>Penyerapan Bahan Baku Lokal</h5>
							{!! Form::label('bahan_lokal', 'Apakah temuan saudara sudah diterapkan? ') !!}
							{!! Form::text('bahan_lokal', old('bahan_lokal'), ['class'=>'form-control', 'placeholder' => 'Jawaban Singkat']) !!}
							<h5>Peningkatan proses/kapasitas/produktifitas</h5>
							{!! Form::label('kapasitas_produksi', 'Seberapa besar produktifitas yang dihasilkan? ') !!}
							{!! Form::text('kapasitas_produksi', old('kapasitas_produksi'), ['class'=>'form-control', 'placeholder' => 'Jawaban Singkat']) !!}
							<h5>Penyerapan Tenaga Kerja</h5>
							{!! Form::label('tenaga_kerja', 'Berapa banyak tenaga kerja yang diserap dalam penciptaan/penerapan produk (lapangan kerja)? ') !!}
							{!! Form::text('tenaga_kerja', old('tenaga_kerja'), ['class'=>'form-control', 'placeholder' => 'Jawaban Singkat']) !!}
						</div>
						<div class="form-group">
							<hr>
							<h4>KEBERLANGSUNGAN / KOMERSIALISASI</h4>
							<hr>
							<h5>Prospek Bisnis / Komersiaisasi </h5>
							{!! Form::label('prospek_tempat', 'Oleh siapa dan dimana? ') !!}
							{!! Form::text('prospek_tempat', old('prospek_tempat'), ['class'=>'form-control', 'placeholder' => 'Jawaban Singkat']) !!}
							{!! Form::label('prospek_cara', 'Bagaimana caranya ? ') !!}
							{!! Form::text('prospek_cara', old('prospek_cara'), ['class'=>'form-control', 'placeholder' => 'Jawaban Singkat']) !!}
							{!! Form::label('biaya_produksi', 'Bagaimana caranya ? ') !!}
							{!! Form::text('biaya_produksi', old('biaya_produksi'), ['class'=>'form-control', 'placeholder' => 'Jawaban Singkat']) !!}
							{!! Form::label('omset', 'Bagaimana caranya ? ') !!}
							{!! Form::text('omset', old('omset'), ['class'=>'form-control', 'placeholder' => 'Jawaban Singkat']) !!}

							<h5>Kemelimpahan Bahan Baku </h5>
							{!! Form::label('asal_bahan', 'Dimana bahan baku pembuatan temuan ini bisa saudara/i  diperoleh (diakses) ? ') !!}
							{!! Form::text('asal_bahan', old('asal_bahan'), ['class'=>'form-control', 'placeholder' => 'Jawaban Singkat']) !!}
							{!! Form::label('quantity_bahan', 'Banyak tidaknya ketersedian bahan baku untuk produksi temuan/inovasi?') !!}
							{!! Form::text('quantity_bahan', old('quantity_bahan'), ['class'=>'form-control', 'placeholder' => 'Jawaban Singkat']) !!}
							<h5>Berorientasi Kebutuhan Masa Depan </h5>
							{!! Form::label('orientasi', 'Menjawab kebutuhan teknologi bagi masyarakat (saat ini & ke depan), jelaskan') !!}
							{!! Form::text('orientasi', old('orientasi'), ['class'=>'form-control', 'placeholder' => 'Jawaban Singkat']) !!}	 
						</div>

						{{ Form::submit('Submit', array('class' => 'btn btn-success')) }}
						
					</div>	
			
			</div>