<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PegawaiModel extends Model
{
    public function allData()
    {
        return DB::table('pegawai')->get();
    }

    public function detailData($id_pegawai)
    {
        return DB::table('pegawai')->where('pegawai_id', $id_pegawai)->first();
    }

    public function addData($data)
    {
        return DB::table('pegawai')->insert($data);
    }

    public function editData($id_pegawai, $data)
    {
        return DB::table('pegawai')->where('pegawai_id', $id_pegawai)->update($data);
    }

    public function deleteData($id_pegawai)
    {
        return DB::table('pegawai')->where('pegawai_id', $id_pegawai)->delete();
    }
}
