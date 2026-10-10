<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
    
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f3e8ff;
        margin: 0;
        padding: 30px;
    }

    h2 {
        text-align: center;
        color: #5b2180;
    }

    form {
        background-color: white;
        width: 350px;
        margin: 30px auto;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 4px 10px #d8c4eb;
    }

    label {
        display: block;
        margin-bottom: 7px;
        color: #4b286b;
        font-weight: bold;
    }

    input {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #c9a8e8;
        border-radius: 6px;
        box-sizing: border-box;
    }

    input:focus {
        outline: 2px solid #b68ae0;
    }

    button {
        background-color: #9b59b6;
        color: white;
        border: none;
        padding: 10px 18px;
        border-radius: 6px;
        cursor: pointer;
    }

    button:hover {
        background-color: #7d3c98;
    }

    a {
        color: #7d3c98;
        margin-left: 10px;
    }
</style> 
</head>
<body>
    <h2>Tambah Data Siswa</h2>

    <form action="simpan.php" method="POST">
            <label for="">NIS</label>
			<input type="text" id="nis" name="nis" required>

			<label for="">Nama</label>
			<input type="text" id="nama" name="nama" required>

			<label for="">Kelas</label>
			<input type="number" id="kelas" name="kelas" required>

			<label for="">Jurusan</label>
			<input type="text" id="jurusan" name="jurusan" required>

            <button type="submit" name="submit">Simpan</button>
            <a href="siswa.php">Kembali</a>
    </form>
</body>
</html>