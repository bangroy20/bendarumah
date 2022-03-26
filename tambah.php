<?php  
session_start();

if ( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
// koneksi ke DBMS
require "functions.php";
if ( isset($_POST["submit"])) {
    if ( tambah($_POST) > 0 ) {
        echo "
            <script>
            alert('data berhasil ditambahkan !!');
            document.location.href = 'conn.php';
            </script>
        ";
    } else {
        echo "<script>
        alert('data gagal ditambahkan !!');
        document.location.href = 'conn.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah benda rumah</title>
</head>
<body>
    <h3>Tambah barang Rumah</h3>

     <form action="" method="POST">
         <ul>
             <li>
                 <label for="nama">Nama Barang :</label>
                 <input type="text" name="nama" id="nama" required autocomplete="off">
             </li>
             <li>
                 <label for ="tahun">Tahun Beli :</label>
                 <input type="text" name="tahun" id="tahun" required autocomplete="off">
            </li>
            <li>
                <label for ="harga">Harga :</label>
                <input type="text" name="harga" id="harga" required autocomplete="off">
            </li>
            <li>
                <label for ="warna">Warna :</label>
                <input type="text" name="warna" id="warna" required autocomplete="off">
            </li>
            <li>
                <label for ="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" autocomplete="off">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Barang!!</button>
            </li>
         </ul>
     </form>
</body>
</html>