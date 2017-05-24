@extends('index')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('petugas') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data Petugas</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Nama Petugas</td>
			<td>:</td>
			<td>{{ $petugas->nama_petugas }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$petugas->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$petugas->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
