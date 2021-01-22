@extends('UASindex')
@section('JUDUL PAGE','PENAMBAHAN DATA KAIN')
 @section('KONTEN')
<h2>penambahan data kain</h2>

<div class="container-fluid">
<form method="POST" action="{{route('uas.store')}}">
{{csrf_field()}}
<input type="hidden" name="_method" value="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Kain</label>
    <input type="text" name="txKain" class="form-control" id="txKain" value="{{old('txKain')}}" >
    <small id="emailHelp" class="form-text text-muted">
    Masukan Nama Kain.
    @if($errors->has('txKain'))
            <span class="badge badge-danger ">
        {{$errors->first('txKain')}}
            </span>
    @endif
    </small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Kode Kain</label>
    <input type="text" name="txId" class="form-control" id="txId" value="{{old('txId')}}" >
    <small id="emailHelp" class="form-text text-muted">
    Masukan Kode Kain.
    @if($errors->has('txId'))
            <span class="badge badge-danger ">
        {{$errors->first('txId')}}
            </span>
    @endif
    </small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Distributor</label>
    <input type="text" name="txKat" class="form-control" id="txKat"  value="{{old('txKat')}}" >
    <small id="emailHelp" class="form-text text-muted">
    Masukan Nama Distributor.
    @if($errors->has('txKat'))
            <span class="badge badge-danger ">
        {{$errors->first('txKat')}}
            </span>
    @endif
    </small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Harga Jual</label>
    <input type="text" name="txHargaJual" class="form-control" id="txHargaJual"  value="{{old('txHargaJual')}}" >
    <small id="emailHelp" class="form-text text-muted">
    Masukan Harga Jual Kain.
    @if($errors->has('txHargaJual'))
            <span class="badge badge-danger ">
        {{$errors->first('txHargaJual')}}
            </span>
    @endif
    </small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Harga Beli</label>
    <input type="text" name="txHargaBeli" class="form-control" id="txHargaBeli"  value="{{old('txHargaBeli')}}" >
    <small id="emailHelp" class="form-text text-muted">
    Isikan Harga Beli Kain.
    @if($errors->has('txHargaBeli'))
            <span class="badge badge-danger ">
        {{$errors->first('txHargaBeli')}}
            </span>
    @endif
    </small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Jumlah Stok</label>
    <input type="text" name="txStok" class="form-control" id="txStok" value="{{old('txStok')}}">
    <small id="emailHelp" class="form-text text-muted">
    Masukan Berapa Meter Kain Datang ( Satuan Meter).
    @if($errors->has('txStok'))
            <span class="badge badge-danger ">
        {{$errors->first('txStok')}}
            </span>
    @endif
    </small>
  </div>
  
  <button type="submit" class="btn btn-primary">Buat Data Baru</button>
</form>
</div>

@stop