<!DOCTYPE html>
<html>
<head>
    <title>Makanan Sehat</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Latihan Laravel</a>
        </div>
        <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
        </ul>
        </div>
        </nav>
        <div class="container-fluid">

        <-- isi konten -->
        <div class="row">
            @yield('content')
        </div>
    </div>
<script type="text/javascript" src="http://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
