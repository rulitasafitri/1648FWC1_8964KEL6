@extends('index')
@section('container')


<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{ url('sepatu') }}"><i class="fa text-default fa-cheron-left"></i></a> Perbarui Data Sepatu</strong>
	</div>
	{!! Form::model($sepatu,['url'=>'sepatu/edit/'.$sepatu->id,'class'=>'form-horizontal']) !!}
	@include('sepatu.form')
	<div style="width: 100%; text-align: right;">
		<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	{!! Form::close() !!}
</div>
@stop