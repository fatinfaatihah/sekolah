<?php

include "koneksi.php";

$data = mysqli_query($db, "SELECT * FROM siswa");
$nomor = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #b1b4b8;
            padding: 40px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
        }

        th, td {
            border: 1px solid #d0c7c7;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #686464;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #adacac;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Data Siswa</h1>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="bukuTableBody">
                <?php foreach ($data as $siswa) { ?>
                <tr>
                    <td><?php echo $nomor++ ?></td>
                    <td><?php echo $siswa ['NIS'] ?></td>
                    <td><?php echo $siswa ['Nama'] ?></td>
                    <td><?php echo $siswa ['Kelas'] ?></td>
                    <td><?php echo $siswa ['Jurusan'] ?></td>
                    <td>
                        <a href="#" class="action-btn edit" style="text-decoration: none!important;">
                           <i class="fa fa-edit"></i>
                        </a>
                        <a href="#" class="action-btn delete" style="text-decoration: none!important;">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
               <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>