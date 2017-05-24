@extends('index')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data distributor</strong>
		<a href="{{url('distributor/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>distributor</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>NAMA</th>
				<th>NO HP</th>
				<th>ALAMAT</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($data as $distributor)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $distributor->nama_distributor or 'nama_distributor kosong' }}</td>
				<td>{{ $distributor->no_hp or 'no_hp kosong' }}</td>
				<td>{{ $distributor->alamat or 'alamat kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('distributor/edit/'.$distributor->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('distributor/lihat/'.$distributor->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('distributor/hapus/'.$distributor->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop