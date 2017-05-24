<div class="form-group">
	<label class="col-sm-2 control-label">Nama Sepatu</label>
	<div class="col-sm-10">
		{!! Form::text('nama_sepatu',null,['class'=>'form-control','placeholder'=>"Nama Sepatu"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Ukuran</label>
	<div class="col-sm-10">
		{!! Form::text('ukuran',null,['class'=>'form-control','placeholder'=>"Ukuran"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Harga</label>
	<div class="col-sm-10">
		{!! Form::text('harga',null,['class'=>'form-control','placeholder'=>"Harga"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Stok</label>
	<div class="col-sm-10">
		{!! Form::text('stok',null,['class'=>'form-control','placeholder'=>"Stok"]) !!}	
	</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Nama Kategori</label>
		<div class="col-sm-10">
		{!! Form::select('kategori_id',$kategori->listKategori(),null,['class'=>'form-control','id' => 'kategori_id','placeholder'=>"Nama Kategori"]) !!}
	</div>	
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Nama Admin</label>
		<div class="col-sm-10">
		{!! Form::select('admin_id',$admin->listAdmin(),null,['class'=>'form-control','id' => 'admin_id','placeholder'=>"Nama Admin"]) !!}
	</div>	
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Nama Distributor</label>
		<div class="col-sm-10">
		{!! Form::select('distributor_id',$distributor->listDistributor(),null,['class'=>'form-control','id' => 'distributor_id','placeholder'=>"Nama Distributor"]) !!}
	</div>	
</div>



