@extends('index')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Sepatu</strong>
		<a href="{{url('sepatu/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>Sepatu</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama sepatu</th>
				<th>Ukuran</th>
				<th>Harga</th>
				<th>Stok</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuasepatu as $sepatu)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $sepatu->nama_sepatu or 'nama_sepatu kosong' }}</td>
				<td>{{ $sepatu->ukuran or 'ukuran kosong' }}</td>
				<td>{{ $sepatu->harga or 'harga kosong' }}</td>
				<td>{{ $sepatu->stok or 'stok kosong' }}</td>

				<td>
					<div class="btn-group" role="group">
						<a href="{{url('sepatu/edit/'.$sepatu->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('sepatu/lihat/'.$sepatu->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('sepatu/hapus/'.$sepatu->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop