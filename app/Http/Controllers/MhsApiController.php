<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseStatusCodeSame;

class MhsApiController extends Controller
{

    public function read(){
        $mhs = Mahasiswa::all();
        return Response()->json([
            'success' => true,
            'message' => 'Data Berhasil Ditampilkan',
            'data' => $mhs
        ], 200);
    }

    public function create(Request $request)
    {
        //$minat = implode(',', $request->get('minat'));
       $mhs = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $request->minat
        ]);

        if ($mhs){
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil Ditampilkan'
            ], 200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Gagal Disimpan'
            ], 401);
        }
        // return redirect('mahasiswa')->with('alert', 'Data Berhasil Ditambahkan');
    }

    public function update($id, Request $request)
    {
        $mhs = Mahasiswa::find($id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $request->minat
        ]);

        if ($mhs){
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil Diubah'
            ], 200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Gagal Diubah'
            ], 401);
        }
    }

    public function delete($id, Request $request)
    {
        $mhs = Mahasiswa::find($id);
        $mhs->delete();

        if ($mhs){
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil Dihapus'
            ], 200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Gagal Dihapus'
            ], 401);
        }
    }

    }

