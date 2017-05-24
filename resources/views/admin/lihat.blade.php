@extends('index')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('admin') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data admin</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Nama Admin</td>
			<td>:</td>
			<td>{{ $admin->nama_admin }}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{ $admin->alamat }}</td>
		</tr>
		<tr>
			<td>No Tlp</td>
			<td>:</td>
			<td>{{ $admin->no_tlp }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$admin->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$admin->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
