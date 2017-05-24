<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/login', function () {
    return view('login');
});*/
/*Route::get('/a', function () {
return view ('index1');
 });*/
Route::get('/login','sesiController@form');
Route::post('/login','sesiController@validasi');
Route::get('/logout','sesiController@logout');
Route::get('/','sesiController@index');
Route::get('level',['middleware'=>['web','level'],function(){
	return view('level/index');
}]);
Route::get('/',function(){
	if(Auth::user()->level=='admin'){
		return view('index');
	}else{
		return view('index1');
	}
});

Route::group(['middleware'=>'AutentifikasiUser'],function(){
Route::get('pengguna/lihat/{pengguna}','penggunaController@lihat');
Route::post('pengguna/simpan','penggunaController@simpan');
Route::get('pengguna/edit/{pengguna}', 'penggunaController@edit');
Route::post('pengguna/edit/{pengguna}','penggunaController@update');
Route::get('pengguna/hapus/{pengguna}','penggunaController@hapus');
Route::get('pengguna/tambah/','penggunaController@tambah');
Route::get('pengguna','penggunaController@awal');

Route::get('admin/lihat/{admin}','adminController@lihat');
Route::post('admin/simpan','adminController@simpan');
Route::get('admin/edit/{admin}', 'adminController@edit');
Route::post('admin/edit/{admin}','adminController@update');
Route::get('admin/hapus/{admin}','adminController@hapus');
Route::get('admin/tambah/','adminController@tambah');
Route::get('admin','adminController@awal');

Route::get('distributor/lihat/{distributor}','distributorController@lihat');
Route::post('distributor/simpan','distributorController@simpan');
Route::get('distributor/edit/{distributor}', 'distributorController@edit');
Route::post('distributor/edit/{distributor}','distributorController@update');
Route::get('distributor/hapus/{distributor}','distributorController@hapus');
Route::get('distributor/tambah/','distributorController@tambah');
Route::get('distributor','distributorController@awal');

Route::get('kategori/lihat/{kategori}','kategoriController@lihat');
Route::post('kategori/simpan','kategoriController@simpan');
Route::get('kategori/edit/{kategori}', 'kategoriController@edit');
Route::post('kategori/edit/{kategori}','kategoriController@update');
Route::get('kategori/hapus/{kategori}','kategoriController@hapus');
Route::get('kategori/tambah/','kategoriController@tambah');
Route::get('kategori','kategoriController@awal');

Route::get('petugas/lihat/{petugas}','petugasController@lihat');
Route::post('petugas/simpan','petugasController@simpan');
Route::get('petugas/edit/{petugas}', 'petugasController@edit');
Route::post('petugas/edit/{petugas}','petugasController@update');
Route::get('petugas/hapus/{petugas}','petugasController@hapus');
Route::get('petugas/tambah/','petugasController@tambah');
Route::get('petugas','petugasController@awal');

Route::get('pelanggan/lihat/{pelanggan}','pelangganController@lihat');
Route::post('pelanggan/simpan','pelangganController@simpan');
Route::get('pelanggan/edit/{pelanggan}', 'pelangganController@edit');
Route::post('pelanggan/edit/{pelanggan}','pelangganController@update');
Route::get('pelanggan/hapus/{pelanggan}','pelangganController@hapus');
Route::get('pelanggan/tambah/','pelangganController@tambah');
Route::get('pelanggan','pelangganController@awal');

Route::get('sepatu/lihat/{sepatu}','sepatuController@lihat');
Route::post('sepatu/simpan','sepatuController@simpan');
Route::get('sepatu/edit/{sepatu}', 'sepatuController@edit');
Route::post('sepatu/edit/{sepatu}','sepatuController@update');
Route::get('sepatu/hapus/{sepatu}','sepatuController@hapus');
Route::get('sepatu/tambah/','sepatuController@tambah');
Route::get('sepatu','sepatuController@awal');

Route::get('pelanggan_sepatu/lihat/{pelanggan_sepatu}','pelangan_sepatuController@lihat');
Route::post('pelanggan_sepatu/simpan','pelangan_sepatuController@simpan');
Route::get('pelanggan_sepatu/edit/{pelanggan_sepatu}', 'pelangan_sepatuController@edit');
Route::post('pelanggan_sepatu/edit/{pelanggan_sepatu}','pelangan_sepatuController@update');
Route::get('pelanggan_sepatu/hapus/{pelanggan_sepatu}','pelangan_sepatuController@hapus');
Route::get('pelanggan_sepatu/tambah/','pelangan_sepatuController@tambah');
Route::get('pelanggan_sepatu','pelangan_sepatuController@awal');

Route::get('pembayaran/lihat/{pembayaran}','pembayaranController@lihat');
Route::post('pembayaran/simpan','pembayaranController@simpan');
Route::get('pembayaran/edit/{pembayaran}', 'pembayaranController@edit');
Route::post('pembayaran/edit/{pembayaran}','pembayaranController@update');
Route::get('pembayaran/hapus/{pembayaran}','pembayaranController@hapus');
Route::get('pembayaran/tambah/','pembayaranController@tambah');
Route::get('pembayaran','pembayaranController@awal');
});