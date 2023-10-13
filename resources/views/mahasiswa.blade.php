<body>
    <h1>BIODATA SISWA</h1>
    <form action = "/mahasiswa/tambah">
        <table border="1"> 
            <tr> 
                <th>NAMA</th>
                <th>UMUR</th>
                <th>KOTA</th>
                <th>OPSI</th>
            </tr>
            @foreach($mahasiswa as $mhs)
            <tr>               
                <td>{{ $mhs->Nama }}</td>
                <td>{{ $mhs->Umur }}</td>
                <td>{{ $mhs->kota }}</td>
                <td>
                    <a href="/mahasiswa/edit/{{$mhs->id}}">edit</a>
                    <a href="/mahasiswa/hapus/{{$mhs->id}}">hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
        <br>
        <input type="submit" value="Tambah Data">
    </body>