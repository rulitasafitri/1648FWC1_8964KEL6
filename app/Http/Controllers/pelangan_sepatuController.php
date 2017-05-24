<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pelanggan;

use App\pelanggan_sepatu;
use App\sepatu;

class pelangan_sepatuController extends Controller
{
    public function awal()
  {
    $semuapelanggan_sepatu = pelanggan_sepatu::all();
        return view('pelanggan_sepatu.awal',['semuapelanggan_sepatu'=>pelanggan_sepatu::all()]);
    
  }
  public function tambah()
  {
  	
  	$pelanggan= new pelanggan;
    $sepatu= new sepatu;
    return view('pelanggan_sepatu.tambah',compact('pelanggan','sepatu'));
    
  }
  public function simpan(Request $input)
  {
    
   /* $this->validate($input,[
        'nama_sepatu'=>'required',
        'ukuran'=>'required',
        'harga'=>'required',
        'stok'=>'required',
        ]);*/

    $pelanggan_sepatu = new pelanggan_sepatu($input->only('pelanggan_id','sepatu_id'));
    $pelanggan_sepatu->tanggal_beli = $input->tanggal_beli;
    $pelanggan_sepatu->jumlah_barang = $input->jumlah_barang;
    

    $informasi = $pelanggan_sepatu->save() ? 'Berhasil simpan data' : 'gagal simpan data';
    return redirect('pelanggan_sepatu')->with(['informasi'=>$informasi]);
    
  }

  public function edit($id)
  {
    $pelanggan_sepatu = pelanggan_sepatu::find($id);
    $pelanggan= new pelanggan;
  	$sepatu= new sepatu;
  
    return view('pelanggan_sepatu.edit',compact('pelanggan','sepatu','pelanggan_sepatu'));
    

  }
  public function lihat($id)
  {
    $pelanggan_sepatu = pelanggan_sepatu::find($id);
    return view('pelanggan_sepatu.lihat')->with(array('pelanggan_sepatu'=>$pelanggan_sepatu));
  }
  public function update($id, Request $input)
  {
  	$pelanggan_sepatu = pelanggan_sepatu::find($id);
  	$pelanggan_sepatu->pelanggan_id= $input->pelanggan_id;
    $pelanggan_sepatu->sepatu_id = $input->sepatu_id;
    $pelanggan_sepatu->tanggal_beli = $input->tanggal_beli;
    $pelanggan_sepatu->jumlah_barang = $input->jumlah_barang;
    $informasi = $pelanggan_sepatu->save() ? 'Berhasil update data' : 'gagal update data';
    return redirect('pelanggan_sepatu')->with(['informasi'=>$informasi]);
  }
  public function hapus($id)
  {
    $pelanggan_sepatu = pelanggan_sepatu::find($id);
    $informasi = $pelanggan_sepatu->delete() ? 'Berhasil hapus data' : 'gagal hapus data';
    return redirect('pelanggan_sepatu')->with(['informasi'=>$informasi]);
  }
}
