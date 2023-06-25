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
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilaikuliah as $p)
            <tr>
                <td>{{ $p->ID }}</td>
                <td>{{ $p->NRP }}</td>
                <td>{{ $p->NilaiAngka }}</td>
                <td>{{ $p->SKS }}</td>
                <td id="nilai_huruf">
                    <?php if ($p->NilaiAngka > 81) {
                        echo 'A';
                    } elseif ($p->NilaiAngka < 40) {
                        echo 'D';
                    } elseif ($p->NilaiAngka < 80) {
                        echo 'B';
                    } elseif ($p->NilaiAngka > 61) {
                        echo 'B';
                    } elseif ($p->NilaiAngka > 41) {
                        echo 'C';
                    } elseif ($p->NilaiAngka < 60) {
                        echo 'B';
                    }

                    ?></td>
                <td>{{ $p->NilaiAngka * $p->SKS }}</td>
            </tr>
        @endforeach
    </table>


    {{ $nilaikuliah->links() }}
    </div>
@endsection
