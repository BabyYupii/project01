<!DOCTYPE html>
<html>
    <head>
        <title>Menampilkan Data Produk </title>
    </head>
    <body>
        <h2>Daftar Produk berdasarkan idkategori: {{$ID_KATEGORI}}</h2>
        Jumlah Data: {{ $JRek }}
        <table border ="1">
        
            <thead>
                <th>No</th>
                <th>Kode Jenis</th>
                <th>Nama Produk</th>
                <th>Stok</th>
                <th>Harga Beli</th>
                <th>Harga jual</th>
            </thead>

            <tbody>
            @foreach( $PData as $i => $p )
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $p->ID_KATEGORI }}</td>
                <td>{{ $p->Nama }}</td>
                <td>{{$p->qty}}</td>
                <td>{{$p->HARGA_BELI}}</td>
                <td>{{$p->HARGA_JUAL}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
       
    </body>
</html>