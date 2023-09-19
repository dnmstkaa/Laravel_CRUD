<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sekolah;

class SekolahController extends Controller
{
    public function index()

    {
        return view('sekolahs.index', [
            'sekolahs' => sekolah::latest()->get(),
        ]);
    }
    public function tambah()

    {
        return view('sekolahs.tambah');
    }
    public function Simpan(Request $request)

    {
        $this->validate($request, [
            'nama_sekolah' =>['required', 'min:5'],
            'alamat' =>['required', 'min:5'],
            'jurusan' =>['required', 'min:2'],
            'jumlah_guru' =>['required', 'numeric'],
        ], [
            'nama_sekolah.required' => 'Kolom Nama Sekolah Harus Diisi!',
            'alamat.required' => 'Kolom Alamat Harus Diisi!',
            'jurusan.required' => 'Kolom Jurusan Harus Diisi!',
            'jumlah_guru.required' => 'Kolom Jumlah Guru Harus Diisi!',
        ]);

        $sekolah = new Sekolah();
        $sekolah->nama_sekolah = $request->nama_sekolah;
        $sekolah->alamat = $request->alamat;
        $sekolah->jurusan = $request->jurusan;
        $sekolah->jumlah_guru = $request->jumlah_guru;

        $sekolah->save();

        session()->flash('success' , 'Data berhasil Ditambahkan.'); 

        return redirect()->route ('sekolahs.index');
    }

    public function edit($id)

        {
            $sekolah = sekolah::find($id);
            return view('sekolahs.edit',[
            'sekolah' => $sekolah,
        ]);
    }

    public function update(Request $request , $id)

    {

        $this->validate($request, [
            'nama_sekolah' =>['required', 'min:5'],
            'alamat' =>['required', 'min:5'],
            'jurusan' =>['required', 'min:2'],
            'jumlah_guru' =>['required', 'numeric'],
        ], [
            'nama_sekolah.required' => 'Kolom Nama Sekolah Harus Diisi!',
            'alamat.required' => 'Kolom Alamat Harus Diisi!',
            'jurusan.required' => 'Kolom Jurusan Harus Diisi!',
            'jumlah_guru.required' => 'Kolom Jumlah Guru Harus Diisi!',
        ]);

        $sekolah = Sekolah::find($id);
        $sekolah->nama_sekolah = $request->nama_sekolah;
        $sekolah->alamat = $request->alamat;
        $sekolah->jurusan = $request->jurusan;
        $sekolah->jumlah_guru = $request->jumlah_guru;

        $sekolah->save();

        session()->flash('info' , 'Data berhasil Diperbarui.'); 

        return redirect()->route ('sekolahs.index');
    }

    public function hapus($id)
    {
        $sekolah = sekolah::find($id);
        $sekolah->delete();

        session()->flash('danger' , 'Data berhasil Dihapus.'); 

        return redirect()->route ('sekolahs.index');
    }
    
}
