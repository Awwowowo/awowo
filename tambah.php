<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2>Tambah Data</h2>
    <form action="actions.php" method="post" enctype="multipart/form-data">
        <label for="nama_peminjam">Nama Peminjam:</label>
        <input type="text" name="nama_peminjam" required>
        <br>
        <label for="nama_buku">Nama Buku:</label>
        <input type="text" name="nama_buku" required>
        <br>
        <label for="penulis">Penulis:</label>
        <input type="text" name="penulis" required>
        <br>
        <label for="tahun_terbit">Tahun Terbit:</label>
        <input type="number" name="tahun_terbit" required>
        <br>
        <label for="gambar">Gambar:</label>
        <input type="file" name="gambar" accept="image/*" required>
        <br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>

</html>