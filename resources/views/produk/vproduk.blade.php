<!DOCTYPE html>
<html>
    <head>
        <title>Latihan View 02</title>
    </head>
    <body>
        <h2><b> Isi Tabel Produk </b></h2>
        <table border"2">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Jenis</th>
                <th>Nama Produk</th>
                <th>Stok</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
            </tr>
        </thead>
        @foreach($produks as $i=>$p)
            <tr>
                <td>{{$i+1}}</td>
                <td>{{$p->ID_KATEGORI}}</td>
                <td>{{$p->Nama}}</td>
                <td>{{$p->qty}}</td>
                <td>{{$p->HARGA_BELI}}</td>
                <td>{{$p->HARGA_JUAL}}</td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </body>
</html>