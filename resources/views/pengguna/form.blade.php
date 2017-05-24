<div class="form-group">
	<label class="col-sm-2 control-label">Username</label>
	<div class="col-sm-10">
		{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Password</label>
	<div class="col-sm-10">
		{{ Form::password('password', array('id' => 'password', "class" => "form-control")) }}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Level</label>
	<div class="col-sm-10">
		{!! Form::text('level',null,['class'=>'form-control','placeholder'=>"level"]) !!}	
	</div>
</div>
