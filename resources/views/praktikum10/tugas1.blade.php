<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Kategori</title>
    </head>
    <body>
        <h3><b> Data Kategori </b></h3>
        Jumlah Data: {{ $JRek }}
        <a href="http://localhost:8000/prak10/create">Tambah Data </a>
        <table>
        <thead>
            <tr>
                <th>#</th>
                <th>ID KATEGORI</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th></th>
            </tr>
        </thead>
        @foreach($KData as $dt=>$nval )
            <tr>
                <td>{{$dt+1}}</td>
                <td>{{$nval->id}}</td>
                <td>{{$nval->Kategori}}</td>
                <td>{{$nval->Keterangan}}</td>
                <td><a href="http://localhost:8000/prak10/{{ $nval->id}}/edit">Edit</td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </body>
</html>