<!DOCTYPE html>
<html>
    <head>
        <title>Mengedit Data Kategori</title>
    </head>
    <body>

        <h3>Mengedit Data Kategori ID: {{ $eDT->id }}</h3>

        <form method="POST" action="http://localhost:8000/prak10/ {{ $eDT->id }}">
        @csrf()
        @method('PUT')
        <div class="txlabel">Kategori</div>
        <div class="inputext"><input type="text"  name="txkat"  value="{{ $eDT->Kategori}}"></div>
        <div class="txlabel">Deskripsi</div>
        <div class="inputext"><input type="text" name="txdesk"  value="{{ $eDT->Keterangan}}"></div>
        <div class="tombol">
            <input type="submit" class="btn" name="btnkirim" value="update data">
        </div>
        </form>
        <form method="POST" action="http://localhost:8000/prak10/ {{ $eDT->id }}">
        @csrf()
        @method('DELETE')
        <input type="submit" class="btn" name="btnkirim" value="delete data">
        </form>
    </body>
