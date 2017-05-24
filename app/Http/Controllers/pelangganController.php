<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pelanggan;

class pelangganController extends Controller
{
   public function awal()
  {
    return view('pelanggan.awal',['data'=>pelanggan::all()]);
  }
  public function tambah()
  {
    return view('pelanggan.tambah');
    
  }
  public function simpan(Request $input)
  {
    
    $this->validate($input,[
        'nama_pelanggan'=>'required',
        'alamat'=>'required',
        'email'=>'required',
        'no_hp'=>'required',
        ]);

    $pelanggan = new pelanggan();
    $pelanggan->nama_pelanggan = $input->nama_pelanggan;
    $pelanggan->alamat = $input->alamat;
    $pelanggan->email = $input->email;
    $pelanggan->no_hp = $input->no_hp;
    $informasi = $pelanggan->save() ? 'Berhasil simpan data' : 'gagal simpan data';
    return redirect('pelanggan')->with(['informasi'=>$informasi]);
    
  }

  public function edit($id)
  {
    $pelanggan = pelanggan::find($id);
    return view('pelanggan.edit')->with(array('pelanggan'=>$pelanggan));
  }
  public function lihat($id)
  {
    $pelanggan = pelanggan::find($id);
    return view('pelanggan.lihat')->with(array('pelanggan'=>$pelanggan));
  }
  public function update($id, Request $input)
  {
    $pelanggan = pelanggan::find($id);
    $pelanggan->nama_pelanggan = $input->nama_pelanggan;
    $pelanggan->alamat = $input->alamat;
    $pelanggan->email = $input->email;
    $pelanggan->no_hp = $input->no_hp;
    $informasi = $pelanggan->save() ? 'Berhasil update data' : 'gagal update data';
    return redirect('pelanggan')->with(['informasi'=>$informasi]);
  }
  public function hapus($id)
  {
    $pelanggan = pelanggan::find($id);
    $informasi = $pelanggan->delete() ? 'Berhasil hapus data' : 'gagal hapus data';
    return redirect('pelanggan')->with(['informasi'=>$informasi]);
  }
}
