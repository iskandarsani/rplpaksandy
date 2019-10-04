@extends('template')
@section('content')
<section class="main-section">
    <div class="content">
        <h1>Tambah Data Barang</h1>
        <hr>
        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <li><strong>{{ $error }}</strong></li>
            @endforeach
        </div>
        @endif

        <form action="{{ route('barang.store') }}" method="post"">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id">
        </div>
        <div class="form-group">
            <label for="kd_barang">KODE BARANG : </label>
            <input type="text" class="form-control" id="kd_barang" name="kd_barang">
        </div>
        <div class="form-group">
            <label for="nama_barang">NAMA BARANG : </label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang">
        </div>
        <div class="form-group">
            <label for="stok">STOK : </label>
            <input type="text" class="form-control" id="stok" name="stok">
        </div>
        <div class="form-group">
            <label for="harga">HARGA : </label>
            <input type="text" class="form-control" id="harga" name="harga">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
        </div>
        </form>
    </div>
</section>
@endsection