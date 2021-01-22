@extends('UASindex')
@section('JUDUL PAGE','DAFTAR PRODUK')
@section('KONTEN')
<h3>Edit data produk</h3>

<div class="container-fluid">
    <form method="POST" action="http://localhost:8000/uas/{{ $edt->Id }}">
        @csrf()
        @method('PUT')

        <div class="form-group">
            <label for="exampleInputEmail1">Nama Kain</label>
            <input type="text" name="txKain" class="form-control" id="txProduk" value="{{$edt->Nama_Kain}}">
            <small id="emailHelp" class="form-text text-muted">Isikan Nama Produk.</small>

        <div class="form-group">
            <label for="exampleInputEmail1">Kode Kain</label>
            <input type="text" name="txId" class="form-control" id="txId" value="{{$edt->Id_Kain}}">
            <small id="emailHelp" class="form-text text-muted">Kode Kain.</small>

        <div class="form-group">
            <label for="exampleInputEmail1">Distributor</label>
            <input type="text" name="txKat" class="form-control" id="txKat" value="{{$edt->Distributor}}">
            <small id="emailHelp" class="form-text text-muted">Kode Kain.</small>

        <div class="form-group">
            <label for="exampleInputEmail1">qty</label>
            <input type="text" name="txStok" class="form-control" id="txStok" value="{{$edt->qty}}">
            <small id="emailHelp" class="form-text text-muted"> Isikan Jumlah Produk.</small>

        <div class="form-group">
            <label for="exampleInputEmail1">Harga Jual</label>
            <input type="text" name="txHargaJual" class="form-control" id="txHargaJual" value="{{$edt->Harga_Jual}}">
            <small id="emailHelp" class="form-text text-muted"> Isikan Harga Beli produk.</small>

        <div class="form-group">
            <label for="exampleInputEmail1">Harga Beli</label>
            <input type="text" name="txHargaBeli" class="form-control" id="txHargaBeli" value="{{$edt->Harga_Beli}}">
            <small id="emailHelp" class="form-text text-muted"> Isikan Harga Jual produk.</small>
        
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