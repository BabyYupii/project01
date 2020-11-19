<!DOCTYPE html>
<html>
    <head>
    <style>
    table, tr, td, th{
        border: 2px solid black;
        border-collapse: collapse;
    }
    </style>
        <title>Tugas 2 </title>
    </head>
    <body>
        <table style="widht:50%">
        <thead>
        <tr>
        <th>Kategori</th>
        <th>Keterangan</th>
        </tr>
        <tbody>
        @foreach ($product as $i => $p)
            <tr>
                <td>{{$p->Kategori}}</td>
                <td>{{$p->Keterangan}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </body>
</html>