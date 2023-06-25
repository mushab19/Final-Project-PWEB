@extends('mushab')

@section('atas')
@endsection

@section('bawah')
    <a class="btn btn-danger" href="/pegawai"> Kembali</a>

    <br />
    <br />

    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" required="required" id="nama"
                        placeholder="Nama" value="{{ $p->pegawai_nama }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jabatan" required="required" id="jabatan"
                        placeholder="Jabatan" value="{{ $p->pegawai_jabatan }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="umur" required="required" id="umur"
                        placeholder="Umur" value="{{ $p->pegawai_umur }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea name="alamat" class="col-lg-12" required="required" id="alamat" placeholder="Alamat">{{ $p->pegawai_alamat }}</textarea>
                </div>
            </div>
            <input type="submit" class="btn btn-success col-lg-12" value="Simpan Data">
        </form>
    @endforeach
    </div>
    </div>
@endsection
