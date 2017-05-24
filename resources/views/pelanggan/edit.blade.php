@extends('index1')
@section('container')

<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('pelanggan')}}"><i class="fa text-default fa-cheron-left"></i></a> Perbarui Data pelanggan</strong>
	</div>
	{!! Form::model($pelanggan,['url'=>'pelanggan/edit/'.$pelanggan->id,'class'=>'form-horizontal']) !!}
	@include('pelanggan.form')
	<div style="width: 100%; text-align: right;">
		<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	{!! Form::close() !!}
</div>
@stop