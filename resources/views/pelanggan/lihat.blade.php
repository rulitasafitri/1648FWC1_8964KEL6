@extends('index1')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('pelanggan') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data pelanggan</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Nama pelanggan</td>
			<td>:</td>
			<td>{{ $pelanggan->nama_pelanggan }}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{ $pelanggan->alamat }}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>{{ $pelanggan->email }}</td>
		</tr>
		<tr>
			<td>No Hp</td>
			<td>:</td>
			<td>{{ $pelanggan->no_hp }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$pelanggan->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$pelanggan->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
