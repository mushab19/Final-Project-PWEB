@extends('mushab')

@section('atas')
@endsection

@section('bawah')
    </form>
    <br />
    <a class="btn btn-info" href="/shopping/beli">Beli</a>

    <br />
    <br />
    <table class="table table-stripped shadow-lg">
        <tr style="background-color:cornsilk">
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @foreach ($shoppingchart as $s)
            <tr>
                <td>{{ $s->id }}</td>
                <td>{{ $s->KodeBarang }}</td>
                <td>{{ $s->Jumlah }}</td>
                <td>{{ "Rp. " . number_format($s->Harga,2,',','.') }}</td>
                <td>{{ "Rp. " . number_format($s->Jumlah * $s->Harga,2,',','.') }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="/shopping/batal/{{ $s->id }}">Batal</a>
                </td>
            </tr>
        @endforeach
    </table>
    </div>
@endsection
