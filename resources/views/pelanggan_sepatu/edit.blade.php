@extends('index1')
@section('container')


<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{ url('pelanggan_sepatu') }}"><i class="fa text-default fa-cheron-left"></i></a> Perbarui Data pelanggan_sepatu</strong>
	</div>
	{!! Form::model($pelanggan_sepatu,['url'=>'pelanggan_sepatu/edit/'.$pelanggan_sepatu->id,'class'=>'form-horizontal']) !!}
	@include('pelanggan_sepatu.form')
	<div style="width: 100%; text-align: right;">
		<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	{!! Form::close() !!}
</div>
@stop