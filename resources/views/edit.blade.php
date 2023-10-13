<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach($mahasiswa as $mhs)
    <form action="/mahasiswa/update" method="post">
      {{ csrf_field() }}
<input type="hidden" name="id" value="{{ $mhs->id }}"> <br/>
Nama <input type="text" required="required" name="nama" value="{{ $mhs->Nama }}"> <br/>
Umur <input type="number" required="required" name="umur" value="{{ $mhs->Umur }}"> <br />
Kota <input type="text" required="required" name="kota" value="{{ $mhs->kota }}"> <br />
<input type="submit" value="simpan data">
</form>
    @endforeach
</body>
</html>