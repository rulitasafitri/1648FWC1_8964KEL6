@extends('index1')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('pembayaran') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data pembayaran</strong>		
	</div>
	<table class="table">
		
			<td>Status</td>
			<td>:</td>
			<td>{{ $pembayaran->status }}</td>
		</tr>
		<tr>
			<td>Total Harga</td>
			<td>:</td>
			<td>{{ $pembayaran->total_harga }}</td>
		</tr>
		<tr>
			<td>Jumlah Barang</td>
			<td>:</td>
			<td>{{ $pembayaran->pelanggan_sepatu->jumlah_barang }}</td>
		</tr>
		<tr>
			<td>Nama Sepatu</td>
			<td>:</td>
			<td>{{ $pembayaran->sepatu->nama_sepatu }}</td>
		</tr>
		<tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$pembayaran->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$pembayaran->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
