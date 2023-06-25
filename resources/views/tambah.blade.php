@extends('mushab')

@section('atas')

@endsection

@section('bawah')
    <a class="btn btn-danger" href="/pegawai"> Kembali</a>

    <br />
    <br />

    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" required="required" id="nama"
                    placeholder="Isi nama disini">
            </div>
        </div>

        <div class="form-group row">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="jabatan" required="required" id="jabatan"
                    placeholder="Isi jabatan disini">
            </div>
        </div>

        <div class="form-group row">
            <label for="umur" class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="umur" required="required" id="umur"
                    placeholder="Isi umur disini">
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea name="alamat" class="col-sm-12" required="required" id="alamat" placeholder="Isi alamat disini"></textarea>
            </div>
        </div>

        <input type="submit" class="btn btn-success col-lg-12" value="Simpan Data">
    </form>
    </form>
    </div>
    </div>
@endsection
