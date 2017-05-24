<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\admin;

class adminController extends Controller
{
    public function awal()
  {
    return view('admin.awal',['data'=>admin::all()]);
  }
  public function tambah()
  {
    return view('admin.tambah');
    
  }
  public function simpan(Request $input) 
  {
    /*
    $this->validate($input,[
        'nama_admin'=>'required',
        'alamat'=>'required',
        'no_tlp'=>'required',
        ]);*/

    $admin = new admin();
    $admin->nama_admin = $input->nama_admin;
    $admin->alamat = $input->alamat;
    $admin->no_tlp = $input->no_tlp;
    $informasi = $admin->save() ? 'Berhasil simpan data' : 'gagal simpan data';
    return redirect('admin')->with(['informasi'=>$informasi]);
    
  }

  public function edit($id)
  {
    $admin = admin::find($id);
    return view('admin.edit')->with(array('admin'=>$admin));
  }
  public function lihat($id)
  {
    $admin = admin::find($id);
    return view('admin.lihat')->with(array('admin'=>$admin));
  }
  public function update($id, Request $input)
  {
    $admin = admin::find($id);
    $admin->nama_admin = $input->nama_admin;
    $admin->alamat = $input->alamat;
    $admin->no_tlp = $input->no_tlp;
    $informasi = $admin->save() ? 'Berhasil update data' : 'gagal update data';
    return redirect('admin')->with(['informasi'=>$informasi]);
  }
  public function hapus($id)
  {
    $admin = admin::find($id);
    $informasi = $admin->delete() ? 'Berhasil hapus data' : 'gagal hapus data';
    return redirect('admin')->with(['informasi'=>$informasi]);
  }
}
