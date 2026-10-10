<?php
include 'koneksi.php';

$query = mysqli_query($db, "SELECT * FROM siswa");
$nomor =1;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
    <style>
       * {
             box-sizing: border-box;
        }

         body {
             margin: 0;
             padding: 30px;
             font-family: Arial, sans-serif;
             background-color: #241a39;
             color: #321d53;
        }

        h2 {
             margin-bottom: 25px;
             font-size: 28px;
             color: #a67cdc;
        }

        a {
             text-decoration: none;
        }

        body > a {
             display: inline-block;
             margin-bottom: 25px;
             padding: 12px 18px;
             background-color: #8054bd;
             color: white;
             border-radius: 8px;
             font-weight: bold;
        }

        body > a:hover {
             background-color: #67409e;
        }

        table {
             width: 100%;
             border-collapse: separate;
             border-spacing: 0;
             background-color: white;
             border-radius: 12px;
             overflow: hidden;
             box-shadow: 0 4px 15px rgba(80, 50, 120, 0.12);
        }

        th, td {
             padding: 16px 18px;
             text-align: left;
             border-bottom: 1px solid #e8def5;
        }

        th {
             background-color: #8054bd;
             color: white;
             font-weight: bold;
        }

        td {
             background-color: #c8b0ed;
        }

        tr:hover td {
             background-color: #ddd0f0;
        }

        tr:last-child td {
             border-bottom: none;
        }

       .aksi {
             text-align: center;
             white-space: nowrap;
        }

         .edit, .hapus {
               display: inline-block;
             margin: 0 6px;
             font-size: 20px;
             transition: transform 0.2s;
        }

         .edit:hover, .hapus:hover {
             transform: scale(1.2);
        }

         @media (max-width: 700px) {
              body {
                  padding: 15px;
            }
              table {
                 font-size: 13px;
            }

             th, td {
                 padding: 10px 8px;
            }
        }
    </style>
</head>
<body>

    <h2>Data Siswa</h2>

    <a href="tambah.php">+ Tambah Siswa</a>
    <br><br>

    <table>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th class="aksi">Aksi</th>
        </tr>

       <?php foreach ($query as $siswa) { ?>
        <tr>
            <td><?php echo $nomor++ ?></td>
            <td><?php echo $siswa ['NIS'] ?></td>
            <td><?php echo $siswa ['Nama'] ?></td>
            <td><?php echo $siswa ['Kelas'] ?></td>
            <td><?php echo $siswa ['Jurusan'] ?></td>
           
            <td class="aksi">
                <a class="edit" href="edit.php?id=<?= $siswa['id'] ?>" title="Edit">✏️</a>

                <a class="hapus" href="hapus.php?id=<?= (int)$siswa['id'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')" title="Hapus">🗑️</a>
            </td>
        </tr>
        <?php } ?>

        <?php
        if (mysqli_num_rows($query) == 0) {
            echo '<tr><td colspan="6">Belum ada data siswa.</td></tr>';
         }
        ?>
    </table>

   

</body>
</html>