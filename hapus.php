<?php

include_once('koneksi.php');

$id = $_GET['id'];

$query = mysqli_query($db, "DELETE FROM siswa WHERE id = $id ");

header('Location: siswa.php');

?>