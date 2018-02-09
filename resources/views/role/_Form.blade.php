<div class="container">
	<div class="row" >
		<div class="col-md-6">
			<div class="form-group">
				{!! Form::label('name', 'Name') !!}
				{!! Form::text('name', null, ['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
						{!! Form::submit($submitButton, ['class' => 'btn btn-success']) !!}				
			</div>
		</div>
	</div>
</div>