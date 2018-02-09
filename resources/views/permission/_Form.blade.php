<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				{!! Form::label('name', 'Name') !!}
				{!! Form::text('name', null, ['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('role_id', 'Role') !!}<br>
				{!! Form::select('role_id[]', $role, $edit->roles->lists('id')->toArray(), ['class'=>'form-control', 'multiple']) !!}	
			</div>

			<div class="form-group">
					{!! Form::submit($submitButton, ['class' => 'btn btn-success']) !!}				
			</div>
			
		</div>
	</div>
</div>