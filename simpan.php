<?php

include 'koneksi.php';

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

$query = mysqli_query($db, "INSERT INTO siswa (NIS, Nama, Kelas, Jurusan) VALUES ('$nis', '$nama', '$kelas', '$jurusan')");

if ($query) {
    header("Location: siswa.php");
    exit();
} else {
    echo "Gagal menambahkan siswa: " . mysqli_error($db);
}
?>