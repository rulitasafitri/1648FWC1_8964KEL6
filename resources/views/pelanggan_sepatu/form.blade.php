<div class="form-group">
<label class="col-sm-2 control-label">Nama Pelanggan</label>
		<div class="col-sm-10">
		{!! Form::select('pelanggan_id',$pelanggan->listpelanggan(),null,['class'=>'form-control','id' => 'pelanggan_id','placeholder'=>"Nama Pelanggan"]) !!}
	</div>	
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Nama Sepatu</label>
		<div class="col-sm-10">
		{!! Form::select('sepatu_id',$sepatu->listSepatu(),null,['class'=>'form-control','id' => 'sepatu_id','placeholder'=>"Nama Sepatu"]) !!}
</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Tangal Beli</label>
	<div class="col-sm-10">
		{!! Form::date('tanggal_beli',null,['class'=>'form-control','placeholder'=>"Tanggal Beli"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Jumlah Barang</label>
	<div class="col-sm-10">
		{!! Form::text('jumlah_barang',null,['class'=>'form-control','placeholder'=>"Jumlah Barang"]) !!}	
	</div>
</div>




