@extends('index')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data admin</strong>
		<a href="{{url('admin/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>admin</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Admin</th>
				<th>Alamat</th>
				<th>No Tlp</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($data as $admin)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $admin->nama_admin or 'nama_admin kosong' }}</td>
				<td>{{ $admin->alamat or 'alamat kosong' }}</td>
				<td>{{ $admin->no_tlp or 'no_tlp kosong' }}</td>
				
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('admin/edit/'.$admin->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('admin/lihat/'.$admin->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('admin/hapus/'.$admin->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop