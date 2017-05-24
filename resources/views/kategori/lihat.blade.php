@extends('index')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('kategori') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data Kategori</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Nama Kategori</td>
			<td>:</td>
			<td>{{ $kategori->nama_kategori }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$kategori->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$kategori->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
