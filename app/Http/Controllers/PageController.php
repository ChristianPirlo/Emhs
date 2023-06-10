<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home', ['key' => 'home']);
    }

    public function profile()
    {
        return view('profile', ['key' => 'profile']);
    }

    public function mahasiswa()
    {
        $mhs = Mahasiswa::orderby('id')->paginate(5);
        return view('mahasiswa', ['key' => 'mahasiswa', 'mhs' => $mhs]);
    }

    public function contact()
    {
        return view('contact', ['key' => 'contact']);
    }

    public function tambah()
    {
        return view('formtambah', ['key' => 'mahasiswa']);
    }

    public function simpan(Request $request)
    {
        // $nim = $request->nim;
        // $nama = $request->nama;
        // $gender= $request->gender;
        // $prodi = $request->prodi;
        // $minat = $request->minat;
        $minat = implode(',', $request->get('minat'));
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $minat,
        ]);
        return redirect('mahasiswa')->with('alert', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $mhs = Mahasiswa::find($id);
        return view('formedit', ['key' => 'mahasiswa', 'mhs' => $mhs]);
    }

    public function hapusmhs($id)
    {
        $mhs = Mahasiswa::find($id);
        $mhs->delete();
        return redirect('mahasiswa')->with('alert_hapus', 'Data Berhasil Di Hapus');
    }

    public function update($id, Request $request)
    {
        $mhs = Mahasiswa::find($id);
        $minat = implode(',', $request->get('minat'));
        $mhs->nim = $request->nim;
        $mhs->nama = $request->nama;
        $mhs->gender = $request->gender;
        $mhs->prodi = $request->prodi;
        $mhs->minat = $minat;
        $mhs->save();

        return redirect('/mahasiswa')->with('alert_update', 'Data Berhasil Di Update');

    }

    public function pencarian(Request $request)
    {
        $cari = $request->search;
        // $mhs = Mahasiswa::where('nama', 'like', '%' .$cari.'%')->paginate(5);
        $mhs = Mahasiswa::where('nama', 'like', '%' . $cari . '%')->orwhere('nim', 'like', '%' . $cari . '%')->paginate(5);
        $mhs->appends($request->all());
        return view('mahasiswa', ['key' => 'mahasiswa', 'mhs' => $mhs]);
    }

}
