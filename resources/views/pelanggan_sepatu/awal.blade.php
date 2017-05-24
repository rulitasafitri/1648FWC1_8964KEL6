@extends('index1')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Transaksi</strong>
		<a href="{{url('pelanggan_sepatu/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>Transaksi</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama pelanggan</th>
				<th>Nama Sepatu</th>
				<th>Tanggal Beli</th>
				<th>Jumlah Barang</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuapelanggan_sepatu as $pelanggan_sepatu)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $pelanggan_sepatu->nama_pelanggan or 'nama pelanggan kosong' }}</td>
				<td>{{ $pelanggan_sepatu->nama_sepatu or 'nama sepatu kosong' }}</td>
				<td>{{ $pelanggan_sepatu->tanggal_beli or 'tanggal beli kosong' }}</td>
				<td>{{ $pelanggan_sepatu->jumlah_barang or 'jumlah barang kosong' }}</td>

				<td>
					<div class="btn-group" role="group">
						<a href="{{url('pelanggan_sepatu/edit/'.$pelanggan_sepatu->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('pelanggan_sepatu/lihat/'.$pelanggan_sepatu->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('pelanggan_sepatu/hapus/'.$pelanggan_sepatu->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop