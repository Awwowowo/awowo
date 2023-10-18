<?php
include 'koneksi.php';

$query = "SELECT * FROM buku";
$result = $koneksi->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nama_peminjam'] . "</td>";
        echo "<td>" . $row['nama_buku'] . "</td>";
        echo "<td>" . $row['penulis'] . "</td>";
        echo "<td>" . $row['tahun_terbit'] . "</td>";
        echo "<td><img src='uploads/" . $row['gambar'] . "' width='100'></td>";
        echo "<td><a href='actions.php?id=" . $row['id'] . "'>Edit</a> | <a href='actions.php?id=" . $row['id'] . "'>Hapus</a></td>";
        echo "</tr>";
    }
}
