@extends('layout.v_template')
@section('title', 'Add Pegawai')
@section('content')
    
    <form action="/insert" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Pegawai</label>
            <input name="pegawai_nama" class="form-control" value="{{ old('pegawai_nama') }}">
            @error('pegawai_nama')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label>Jabatan Pegawai</label>
            <input name="pegawai_jabatan" class="form-control" value="{{ old('pegawai_jabatan') }}">
            @error('pegawai_jabatan')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label>Umur Pegawai</label>
            <input name="pegawai_umur" class="form-control" value="{{ old('pegawai_umur') }}">
            @error('pegawai_umur')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label>Alamat Pegawai</label>
            <textarea name="pegawai_alamat" class="form-control">{{ old('pegawai_alamat') }}</textarea>
            @error('pegawai_alamat')
                {{ $message }}
            @enderror
        </div>

        <button class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
    </form>

@endsection