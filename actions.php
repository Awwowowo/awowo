<?php
include 'koneksi.php';

if (isset($_POST['tambah'])) {
    $nama_peminjam = $_POST['nama_peminjam'];
    $nama_buku = $_POST['nama_buku'];
    $penulis = $_POST['penulis'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $gambar = $_FILES['gambar']['name'];
    $gambar_tmp = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($gambar_tmp, 'uploads/' . $gambar);

    $query = "INSERT INTO buku (nama_peminjam, nama_buku, penulis, tahun_terbit, gambar) VALUES ('$nama_peminjam', '$nama_buku', '$penulis', '$tahun_terbit', '$gambar')";
    $koneksi->query($query);

    header('location: index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM buku WHERE id = $id";
    $result = $koneksi->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $gambar = 'uploads/' . $row['gambar'];
        unlink($gambar);

        $query = "DELETE FROM buku WHERE id = $id";
        $koneksi->query($query);

        header('location: index.php');
    }
}
