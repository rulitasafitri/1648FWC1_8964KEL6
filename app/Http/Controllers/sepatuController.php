<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\kategori;

use App\distributor;

use App\admin;

use App\sepatu;

class sepatuController extends Controller
{
    public function awal()
  {
    $semuasepatu = sepatu::all();
        return view('sepatu.awal',['semuasepatu'=>sepatu::all()]);
    
  }
  public function tambah()
  {
  	$kategori= new kategori;
  	$distributor= new distributor;
  	$admin= new admin;
    return view('sepatu.tambah',compact('kategori','distributor','admin'));
    
  }
  public function simpan(Request $input)
  {
    
   /* $this->validate($input,[
        'nama_sepatu'=>'required',
        'ukuran'=>'required',
        'harga'=>'required',
        'stok'=>'required',
        ]);*/

    $sepatu = new sepatu($input->only('kategori_id','distributor_id','admin_id'));
    $sepatu->nama_sepatu = $input->nama_sepatu;
    $sepatu->ukuran = $input->ukuran;
    $sepatu->harga = $input->harga;
    $sepatu->stok = $input->stok;


    $informasi = $sepatu->save() ? 'Berhasil simpan data' : 'gagal simpan data';
    return redirect('sepatu')->with(['informasi'=>$informasi]);
    
  }

  public function edit($id)
  {
    $sepatu = sepatu::find($id);
    $kategori= new kategori;
  	$distributor= new distributor;
  	$admin= new admin;
    return view('sepatu.edit',compact('kategori','distributor','admin','sepatu'));
    

  }
  public function lihat($id)
  {
    $sepatu = sepatu::find($id);
    return view('sepatu.lihat')->with(array('sepatu'=>$sepatu));
  }
  public function update($id, Request $input)
  {
    $sepatu = sepatu::find($id);
    $sepatu->nama_sepatu = $input->nama_sepatu;
    $sepatu->ukuran = $input->ukuran;
    $sepatu->harga = $input->harga;
    $sepatu->stok = $input->stok;
    $sepatu->kategori_id = $input->kategori_id;
     $sepatu->admin_id = $input->admin_id;
    $sepatu->distributor_id = $input->distributor_id;
   

    $informasi = $sepatu->save() ? 'Berhasil update data' : 'gagal update data';
    return redirect('sepatu')->with(['informasi'=>$informasi]);
  }
  public function hapus($id)
  {
    $sepatu = sepatu::find($id);
    $informasi = $sepatu->delete() ? 'Berhasil hapus data' : 'gagal hapus data';
    return redirect('sepatu')->with(['informasi'=>$informasi]);
  }
}
