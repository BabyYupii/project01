<!DOCTYPE html>
<html>
    <head>
        <title>Latihan View 02</title>
    </head>
    <body>
        <h2>Isi Variabel Produk</h2>

        Produk: {{ isset($produk)? $produk : "Variabel Produk tidak ada" }}

    </body>
</html>