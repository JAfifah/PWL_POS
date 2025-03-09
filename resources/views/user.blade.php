<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
</head>
<body>
    <h1>Daftar User</h1>
    <table border="1">
        <tr>
            <th>User ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Level ID</th>
        </tr>
        @foreach($data as $user)
        <tr>
            <td>{{ $user->user_id }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->nama }}</td>
            <td>{{ $user->level_id }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
