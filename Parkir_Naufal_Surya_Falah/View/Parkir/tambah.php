<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Tambah Parkir</h1>
    <form action="Simpan.php" method="POST">
        <label for="">id_parkir</label>
        <input type="text" name="id_parkir"><br>
        <label for="">Nama</label>
        <input type="text" name="Nama"><br>
        <label for="">Alamat</label>
        <input type="text" name="Alamat"><br>
        <label for="">Varian</label>
        <input type="text" name="Varian"><br>
        <label for="">Harga</label>
        <input type="text" name="Harga"><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>