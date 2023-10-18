<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi CRUD Gambar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Peminjaman Buku</h1>
    <a href="tambah.php">Tambah Data</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Peminjam</th>
                <th>Nama Buku</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'tampil.php'; ?>
        </tbody>
    </table>
</body>

</html>