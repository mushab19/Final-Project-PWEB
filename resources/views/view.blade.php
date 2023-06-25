@extends('mushab')

@section('atas')
@endsection

@section('bawah')
    <a class="btn btn-danger" href="/pegawai"> Kembali</a>

    <br />
    <br />

    @foreach ($pegawai as $p)

        <div class="form-group row">
            <label for="id" class="col-sm-2 col-form-label">Pegawai ID</label>
            <div class="col-sm-10">
                <label for="id" class="col-sm-2 col-form-label">: {{ $p->pegawai_id }}</label>
            </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <label for="nama" class="col-lg-12 col-form-label">: {{ $p->pegawai_nama }}</label>
            </div>
        </div>

        <div class="form-group row">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                <label for="nama" class="col-sm-2 col-form-label">: {{ $p->pegawai_jabatan }}</label>
            </div>
        </div>

        <div class="form-group row">
            <label for="umur" class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-10">
                <label for="umur" class="col-sm-2 col-form-label">: {{ $p->pegawai_umur }}</label>
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <label for="alamat" class="col-sm col-form-label">: {{ $p->pegawai_alamat }}</label>
            </div>
        </div>
    @endforeach
    </div>
    </div>
@endsection
