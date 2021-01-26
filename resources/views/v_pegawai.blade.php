@extends('layout.v_template')
@section('title', 'Laravel')
@section('content')

    <a href="/add" class="btn btn-primary btn-sm mb-4"><i class="fas fa-plus"></i> Add</a>

    @if (session('pesan'))
        <div class="alert alert-success" role="alert">
            {{ session('pesan') }}
        </div>
    @endif

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pegawai</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($pegawai as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->pegawai_nama }}</td>
                    <td>{{ $item->pegawai_jabatan }}</td>
                    <td>{{ $item->pegawai_umur }}</td>
                    <td>{{ $item->pegawai_alamat }}</td>
                    <td width="20px"><a href="/delete/{{ $item->pegawai_id }}" onclick="return confirm('Apakah yakin menghapus data ini?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a></td>
                    <td width="20px"><a href="/edit/{{ $item->pegawai_id }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
