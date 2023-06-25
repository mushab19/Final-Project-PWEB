@extends('mushab')

@section('atas')
@endsection

@section('bawah')
    <div>
        <p><b>Cari Data Pegawai :</b></p>
        <form action="/pegawai/cari" method="GET">
            <div class="row">
                <div class="col-sm-3">
                    <input type="text" name="cari" class="form-control" placeholder="Cari Pegawai .."
                        value="{{ old('cari') }}">
                </div>
                <div class="col-sm-2">
                    <input type="submit" class="btn btn-info" value="CARI">
                </div>
            </div>
    </div>
    </form>
    <br />
    <a class="btn btn-info" href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

    <br />
    <br />
    <table class="table table-stripped shadow-lg">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="/pegawai/view/{{ $p->pegawai_id }}">View</a>
                    |
                    <a class="btn btn-info btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                    |
                    <a class="btn btn-info btn-sm" href="/pegawai/hapus/{{ $p->pegawai_id }}"><i
                            class="fas fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
    </table>


    {{ $pegawai->links() }}
    </div>
@endsection
