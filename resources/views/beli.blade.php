@extends('mushab')

@section('atas')
@endsection

@section('bawah')
    <a class="btn btn-danger" href="/shopping"> Kembali</a>

    <br />
    <br />

    <form action="/shopping/store" method="post">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="KodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="KodeBarang" required="required" id="KodeBarang"
                    placeholder="Isi kode barang disini">
            </div>
        </div>

        <div class="form-group row">
            <label for="JumlahPembelian" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="JumlahPembelian" required="required" id="JumlahPembelian"
                    placeholder="Isi jumlah pembelian disini">
            </div>
        </div>

        <div class="form-group row">
            <label for="Harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="Harga" required="required" id="Harga"
                    placeholder="Isi harga disini">
            </div>
        </div>

        <input type="submit" class="btn btn-success col-lg-12" value="Beli">
    </form>
    </form>
    </div>
    </div>
@endsection
