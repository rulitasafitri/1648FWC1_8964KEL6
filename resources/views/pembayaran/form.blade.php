<div class="form-group">
	<label class="col-sm-2 control-label">Status</label>
	<div class="col-sm-10">
		{!! Form::text('status',null,['class'=>'form-control','placeholder'=>"Status"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Total Harga</label>
	<div class="col-sm-10">
		{!! Form::text('total_harga',null,['class'=>'form-control','placeholder'=>"Total Harga"]) !!}	
	</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Jumlah Barang</label>
		<div class="col-sm-10">
		{!! Form::select('pelanggan_sepatu_id',$pelanggan_sepatu->listjumlahbarang(),null,['class'=>'form-control','id' => 'pelanggan_sepatu_id','placeholder'=>"Jumlah Barang"]) !!}
</div>	

</div>
<div class="form-group">
<label class="col-sm-2 control-label">Nama Sepatu</label>
		<div class="col-sm-10">
		{!! Form::select('sepatu_id',$sepatu->listSepatu(),null,['class'=>'form-control','id' => 'sepatu_id','placeholder'=>"Nama Sepatu"]) !!}
</div>	
</div>




