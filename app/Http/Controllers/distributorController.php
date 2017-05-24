<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\distributor;

class distributorController extends Controller
{
    public function awal()
  {
    return view('distributor.awal',['data'=>distributor::all()]);
  }
  public function tambah()
  {
    return view('distributor.tambah');
    
  }
  public function simpan(Request $input)
  {
    
    $this->validate($input,[
        'nama_distributor'=>'required',
        'no_hp'=>'required',
        'alamat'=>'required',
        ]);

    $distributor = new distributor();
    $distributor->nama_distributor = $input->nama_distributor;
     $distributor->no_hp = $input->no_hp;
      $distributor->alamat = $input->alamat;
    $informasi = $distributor->save() ? 'Berhasil simpan data' : 'gagal simpan data';
    return redirect('distributor')->with(['informasi'=>$informasi]);
    
  }

  public function edit($id)
  {
    $distributor = distributor::find($id);
    return view('distributor.edit')->with(array('distributor'=>$distributor));
  }
  public function lihat($id)
  {
    $distributor = distributor::find($id);
    return view('distributor.lihat')->with(array('distributor'=>$distributor));
  }
  public function update($id, Request $input)
  {
    $distributor = distributor::find($id);
    $distributor->nama_distributor = $input->nama_distributor;
    $distributor->no_hp = $input->no_hp;
    $distributor->alamat = $input->alamat;
    $informasi = $distributor->save() ? 'Berhasil update data' : 'gagal update data';
    return redirect('distributor')->with(['informasi'=>$informasi]);
  }
  public function hapus($id)
  {
    $distributor = distributor::find($id);
    $informasi = $distributor->delete() ? 'Berhasil hapus data' : 'gagal hapus data';
    return redirect('distributor')->with(['informasi'=>$informasi]);
  }
}
