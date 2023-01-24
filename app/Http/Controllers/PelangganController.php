<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        $data = Pelanggan::get();
        return view('admin.pelanggan.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pelanggan.create');
    }

    public function insert(Request $request)
    {
        $request->validate(Pelanggan::$rules);
        $requests = $request->all();

        $cat = Pelanggan::create($requests);
        if($cat){
            return redirect('admin/pelanggan')->with('status', 'Berhasil menambah data !');
        }

        return redirect('admin/pelanggan')->with('status', 'Gagal menambah data !');
    }

    public function edit($id)
    {
        $data       = Pelanggan::find($id);
        return view('admin.pelanggan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $d = Pelanggan::find($id);
        if ($d == null) {
            return redirect('admin/pelanggan')->with('status', 'Data tidak ditemukan !');
        }

        $req = $request->all();

        $data = Pelanggan::find($id)->update($req);
        if ($data) {
            return redirect('admin/pelanggan')->with('status', 'Pelanggan berhasil diedit !');
        }
        return redirect('admin/pelanggan')->with('status', 'Gagal edit pelanggan !');

    }

    public function delete($id)
    {
        $data = Pelanggan::find($id);
        if ($data == null) {
            return redirect('admin/pelanggan')->with('status', 'Data tidak ditemukan !');
        }
        $delete = $data->delete();
        if ($delete) {
            return redirect('admin/pelanggan')->with('status', 'Berhasil hapus pelanggan !');
        }
        return redirect('admin/pelanggan')->with('status', 'Gagal hapus Pelanggan !');
    }
}
