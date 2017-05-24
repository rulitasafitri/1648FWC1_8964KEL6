@extends('index1')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('pelanggan_sepatu') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data pelanggan_sepatu</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Nama Pelanggan</td>
			<td>:</td>
			<td>{{ $pelanggan_sepatu->pelanggan->nama_pelanggan }}</td>
		</tr>
		<tr>
			<td>Nama Sepatu</td>
			<td>:</td>
			<td>{{ $pelanggan_sepatu->sepatu->nama_sepatu }}</td>
		</tr>
		<tr>
			<td>Tanggal Beli</td>
			<td>:</td>
			<td>{{ $pelanggan_sepatu->tanggal_beli }}</td>
		</tr>
		<tr>
			<td>Jumlah Barang</td>
			<td>:</td>
			<td>{{ $pelanggan_sepatu->jumlah_barang }}</td>
		</tr>
		
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$pelanggan_sepatu->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$pelanggan_sepatu->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
