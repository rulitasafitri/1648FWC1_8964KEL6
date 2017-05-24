<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\sepatu;

use App\pelanggan_sepatu;

use App\pembayaran;

class pembayaranController extends Controller
{
    public function awal()
  {
    $semuapembayaran = pembayaran::all();
        return view('pembayaran.awal',['semuapembayaran'=>pembayaran::all()]);
    
  }
  public function tambah()
  {
  	
  	$pelanggan_sepatu= new pelanggan_sepatu;
    $sepatu= new sepatu;
    
    return view('pembayaran.tambah',compact('pelanggan_sepatu','sepatu'));
    
  }
  public function simpan(Request $input)
  {
    
   /* $this->validate($input,[
        'nama_sepatu'=>'required',
        'ukuran'=>'required',
        'harga'=>'required',
        'stok'=>'required',
        ]);*/

    $pembayaran = new pembayaran($input->only('pelanggan_sepatu_id','sepatu_id'));
    $pembayaran->status = $input->status;
    $pembayaran->total_harga = $input->total_harga;
    

    $informasi = $pembayaran->save() ? 'Berhasil simpan data' : 'gagal simpan data';
    return redirect('pembayaran')->with(['informasi'=>$informasi]);
    
  }

  public function edit($id)
  {
    $pembayaran = pembayaran::find($id);
    $pelanggan_sepatu= new pelanggan_sepatu;
  	$sepatu= new sepatu;
  
    return view('pembayaran.edit',compact('pelanggan_sepatu','sepatu','pembayaran'));
    

  }
  public function lihat($id)
  {
    $pembayaran = pembayaran::find($id);
    return view('pembayaran.lihat')->with(array('pembayaran'=>$pembayaran));
  }
  public function update($id, Request $input)
  {
  	$pembayaran = pembayaran::find($id);
  	$pembayaran->pelanggan_sepatu_id= $input->pelanggan_sepatu_id;
    $pembayaran->sepatu_id = $input->sepatu_id;
    $pembayaran->status = $input->status;
    $pembayaran->total_harga = $input->total_harga;
    $informasi = $pembayaran->save() ? 'Berhasil update data' : 'gagal update data';
    return redirect('pembayaran')->with(['informasi'=>$informasi]);
  }
  public function hapus($id)
  {
    $pembayaran = pembayaran::find($id);
    $informasi = $pembayaran->delete() ? 'Berhasil hapus data' : 'gagal hapus data';
    return redirect('pembayaran')->with(['informasi'=>$informasi]);
  }
}
