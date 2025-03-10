<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form action="/user/ubah_simpan" method="post">
        @csrf
        <input type="hidden" name="user_id" value="{{ $user->user_id }}">
        <label>Username:</label>
        <input type="text" name="username" value="{{ $user->username }}" required><br>

        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $user->nama }}" required><br>

        <label>Password (Kosongkan jika tidak diubah):</label>
        <input type="password" name="password"><br>

        <label>Level:</label>
        <select name="level_id">
            <option value="1" {{ $user->level_id == 1 ? 'selected' : '' }}>Admin</option>
            <option value="2" {{ $user->level_id == 2 ? 'selected' : '' }}>User</option>
        </select><br>

        <button type="submit">Ubah</button>
    </form>
    <a href="/user">Kembali</a>
</body>
</html>
