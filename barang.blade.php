@extends('template')
@section('content')
<section class="main-section">
    <div class="content">
        <h1 align="center"><font face="helvetica">D A T A - B A R A N G</font></h1>
        @if(Session::has('alert_message'))
        <div class="alert alert-success">
            <strong>{{ Session::get('alert_message') }}</strong>
        </div>
        @endif
        <hr>
        <br>
        &nbsp
        <a href="{{route('barang.create')}}" class="btn btn-primary">TAMBAH DATA</a>
        <br><br>
        <table class="table table-bordered">
            <thead>
            <tr align="center">
                <th>ID</th>
                <th>KODE BARANG</th>
                <th>NAMA BARANG</th>
                <th>STOK</th>
                <th>HARGA</th>
                <?php if(session::get('hak_akses')=="admin"){?>
                <th>AKSI</th>
                <?php } ?>
            </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
            @foreach($data as $datas)
                <tr align="center">
                    <!-- <td>{{ $no++ }}</td> -->
                    <td>{{ $datas->id }}</td>
                    <td>{{ $datas->kd_barang }}</td>
                    <td>{{ $datas->nama_barang }}</td>
                    <td>{{ $datas->stok }}</td>
                    <td>{{ $datas->harga }}</td>
                    <?php if(session::get('hak_akses')=="admin"){?>

                    <td>
                        <form action="{{ route('barang.destroy', $datas->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('barang.edit', $datas->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            <?php } ?>

                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection