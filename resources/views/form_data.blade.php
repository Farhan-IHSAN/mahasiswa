<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Form Tambah Data</h1>
    <form action="/mahasiswa/simpan" method="post">
        {{ csrf_field() }}
        Nama <input type="text" name="nama" required="required"> <br />
        Umur <input type="number" name="umur" required="required"> <br />
        Kota <input type="text" name="kota" required="required"> <br />
        <input type="submit" value="simpan data">
    </form>
</body>
</html>