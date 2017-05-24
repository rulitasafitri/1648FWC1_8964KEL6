@extends('index1')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data pembayaran</strong>
		<a href="{{url('pembayaran/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>pembayaran</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Status</th>
				<th>Total Harga</th>
				<th>Jumlah Barang</th>
				<th>Nama Sepatu</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuapembayaran as $pembayaran)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $pembayaran->status or 'status kosong' }}</td>
				<td>{{ $pembayaran->total_harga or 'total_harga kosong' }}</td>
				<td>{{ $pembayaran->jumlah_barang or 'jumlah_barang kosong' }}</td>
				<td>{{ $pembayaran->nama_sepatu or 'nama_sepatu kosong' }}</td>

				<td>
					<div class="btn-group" role="group">
						<a href="{{url('pembayaran/edit/'.$pembayaran->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('pembayaran/lihat/'.$pembayaran->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('pembayaran/hapus/'.$pembayaran->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop