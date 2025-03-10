<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
</head>
<body>
    <h1>Data User</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>User ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Level Pengguna</th>
        </tr>
        <tr>
            <td>{{ $data->id ?? 'Tidak Ada' }}</td>
            <td>{{ $data->username ?? 'Tidak Ada' }}</td>
            <td>{{ $data->nama ?? 'Tidak Ada' }}</td>
            <td>{{ $data->level_id ?? 'Tidak Ada' }}</td>
        </tr>
    </table>
</body>

</html>
