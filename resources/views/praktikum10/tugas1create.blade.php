<!DOCTYPE html>
<html>
    <head>
        <title>Menambahkan Data Kategori</title>
    </head>
    <body>

        <h3>Menambahkan Data Kategori</h3>

        @if(count($errors) > 0)
        <div>
            <ul>
            @foreach($errors->all() as $errors)
                <li> {{$errors}} </li>
            @endforeach
            </ul>
            
        <form method="POST" action="http://localhost:8000/prak10">
        @csrf()
        @method('POST')
        <div class="txlabel">Kategori</div>
        <div class="inputext"><input type="text"  name="txkat">
        @if($errors->has("txkat"))
            <span>Tidak Boleh Kosong</span>
        @endif
        </div>
        <div class="txlabel">Deskripsi</div>
        <div class="inputext"><input type="text" name="txdesk">
        @if($errors->has("txdesk"))
            <span>Tidak Boleh Kosong</span>
        @endif</div>
        <div class="tombol">

            <input type="submit" name="btnkirim" value="buat data">
        </div>
    </body>
