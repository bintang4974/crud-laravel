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

    public function addData($data)
    {
        return DB::table('pegawai')->insert($data);
    }
}
