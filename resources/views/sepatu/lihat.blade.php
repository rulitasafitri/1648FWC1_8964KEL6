@extends('index')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('sepatu') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data sepatu</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Nama Sepatu</td>
			<td>:</td>
			<td>{{ $sepatu->nama_sepatu }}</td>
		</tr>
		<tr>
			<td>Ukuran</td>
			<td>:</td>
			<td>{{ $sepatu->ukuran }}</td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>:</td>
			<td>{{ $sepatu->harga }}</td>
		</tr>
		<tr>
			<td>Stok</td>
			<td>:</td>
			<td>{{ $sepatu->stok }}</td>
		</tr>
		<tr>
			<td>Nama Katrgori</td>
			<td>:</td>
			<td>{{ $sepatu->kategori->nama_kategori }}</td>
		</tr>
		<tr>
			<td>Nama Admin</td>
			<td>:</td>
			<td>{{ $sepatu->admin->nama_admin }}</td>
		</tr>
		<tr>
			<td>Nama Distributor</td>
			<td>:</td>
			<td>{{ $sepatu->distributor->nama_distributor }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$sepatu->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$sepatu->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
