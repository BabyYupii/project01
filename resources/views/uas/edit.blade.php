@extends('praktikum')
@section('JUDUL PAGE','DAFTAR PRODUK')
@section('KONTEN')
<h3>Edit data produk</h3>

<div class="container-fluid">
    <form method="POST" action="http://localhost:8000/prak10/ {{ $edt->id }}">
        @csrf()
        @method('PUT')

        <div class="form-group">
            <label for="exampleInputEmail1">Nama Produk</label>
            <input type="text" name="txProduk" class="form-control" id="txProduk" value="{{$edt->txProduk}}" >
            <small id="emailHelp" class="form-text text-muted">Isikan Nama Produk.</small>

        <div class="form-group">
            <label for="exampleInputEmail1">Harga Beli</label>
            <input type="text" name="txHargaBeli" class="form-control" id="txHargaBeli" value="{{$edt->txHargaBeli}}" >
            <small id="emailHelp" class="form-text text-muted"> Isikan Harga Beli produk.</small>

        <div class="form-group">
            <label for="exampleInputEmail1">Harga Jual</label>
            <input type="text" name="txHargaBeli" class="form-control" id="txHargaBeli" value="{{$edt->txHargaJual}}" >
            <small id="emailHelp" class="form-text text-muted"> Isikan Harga Jual produk.</small>

        <div class="form-group">
            <label for="exampleInputEmail1">Stok</label>
            <input type="text" name="txHargaBeli" class="form-control" id="txStok" value="{{$edt->txStok}}" >
            <small id="emailHelp" class="form-text text-muted"> Isikan Jumlah Produk.</small>
        
        <div class="tombol">
        <button type="submit" class="btn btn-succes">Edit data Baru</button>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
@stop