@extends('praktikum')
@section('JUDUL PAGE','DAFTAR PRODUK')
@section('KONTEN')
<h2>daftar produk</h2>
<sup> Total Data=:{{$JRek}}</sup>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Produk</th>
      <th scope="col">Kategori</th>
      <th scope="col">qty</th>
      <th scope="col">Harga Beli</th>
      <th scope="col">Harga Jual</th>
      <th scope="col"><a class="btn btn-success" href="{{route('prak11.create')}}">Tambah Data</a></th>
    </tr>
  </thead> 
  <tbody>
@foreach($KData as $i=>$p)
    <tr>
      <th scope="row">{{$i+1}}</th>
      <td>{{$p->Nama}}</td>
      <td>{{$p->ID_KATEGORI}}</td>
      <td>{{$p->qty}}</td>
      <td>{{$p->HARGA_BELI}}</td>
      <td>{{$p->HARGA_JUAL}}</td>
      <td><a class="btn btn-outline-warning" href="{{route('prak11.edit',$p->ID)}}">Edit</a></td>

    </tr>
@endforeach
  </tbody>
</table>
@stop
