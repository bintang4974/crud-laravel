<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PegawaiModel;

class PegawaiController extends Controller
{
    
    public function __construct()
    {
        $this->PegawaiModel = new PegawaiModel();
    }
    
    public function index()
    {
        $data = ['pegawai' => $this->PegawaiModel->allData()];
        return view('v_pegawai', $data);
    }

    public function add()
    {
        return view('v_add_pegawai');
    }

    public function insert()
    {
        Request()->validate([
            'pegawai_nama' => 'required',
            'pegawai_jabatan' => 'required',
            'pegawai_umur' => 'required',
            'pegawai_alamat' => 'required'
        ],[
            'pegawai_nama.required' => 'Wajib Diisi!',
            'pegawai_jabatan.required' => 'Wajib Diisi!',
            'pegawai_umur.required' => 'Wajib Diisi!',
            'pegawai_alamat.required' => 'Wajib Diisi!'
        ]);

        $data = [
            'pegawai_nama' => Request()->pegawai_nama,
            'pegawai_jabatan' => Request()->pegawai_jabatan,
            'pegawai_umur' => Request()->pegawai_umur,
            'pegawai_alamat' => Request()->pegawai_alamat,
        ];

        $this->PegawaiModel->addData($data);
        return redirect()->route('pegawai')->with('pesan', 'Data Berhasil Ditambahkan!');
    }
}
