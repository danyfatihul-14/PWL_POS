<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
</head>
<body>
    <h1>Data User</h1>
    <table border="1" cellpadding="2" cellspcing="0">
        <tr>
            <td>Jumlah Pengguna</td>
            {{-- <td>Username</td>
            <td>Nama</td>
            <td>ID Level Pengguna</td> --}}
        </tr>
        <tr>
            <td>{{ $data }}</td>
            {{-- <td>{{ $data->username }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->level_id }}</td> --}}
        </tr>
    </table>
</body>
</html>