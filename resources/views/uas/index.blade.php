@extends('UASindex')
@section('JUDUL PAGE','Daftar Kain')
@section('KONTEN')
<style>
body {

  background-color : #FFC0CB;


}
</style>
<h2>daftar kain</h2>
<body>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">kain</th>
      <th scope="col">Kode Kain</th>
      <th scope="col">Distributor</th>
      <th scope="col">qty</th>
      <th scope="col">Harga Jual</th>
      <th scope="col">Harga Beli</th>
      <th scope="col"><a class="btn btn-success" href="{{route('uas.create')}}">Tambah Data</a></th>
    </tr>
  </thead> 
  <tbody>
@foreach($DKData as $i=>$p)
    <tr>
      <th scope="row">{{$i+1}}</th>
      <td>{{$p->Nama_Kain}}</td>
      <td>{{$p->Id_Kain}}</td>
      <td>{{$p->Distributor}}</td>
      <td>{{$p->qty}}</td>
      <td>{{$p->Harga_Jual}}</td>
      <td>{{$p->Harga_Beli}}</td>
      <td>
      <form action="{{ route('uas.destroy',$p->Id) }}" method="POST">
      <a class="btn btn-outline-warning" href="{{route('uas.edit',$p->Id)}}">Edit</a>
      @csrf()
      @method('DELETE')  
      <button type="submit" class="btn btn-outline-warning" href="{{route('uas.destroy',$p->Id)}}">Hapus</a>
      </td>

    </tr>
@endforeach
  </tbody>
</table>
</body>
@stop