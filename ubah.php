<?php  
session_start();

if ( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
// koneksi ke DBMS
require "functions.php";

// ambil data dari url
$id = $_GET["id"];

// query data berdasarkan id
$barang = query("SELECT * FROM benda WHERE id = $id")["0"];


// cek apakah tombol submit dsudah ditekan apa belum
if ( isset($_POST["submit"])) {

    // cek apakah data berhasil di ubah
    if ( ubah($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil diubah !!');
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
    <title>ubah benda rumah</title>
</head>
<body>
    <h3>Ubah barang Rumah</h3>

     <form action="" method="POST">
         <input type="hidden" name="id" value="<?php echo $barang["id"]; ?>">
         <ul>
             <li>
                 <label for="nama">Nama Barang :</label>
                 <input type="text" name="nama" id="nama" required value="<?php echo $barang["nama"]; ?>" autocomplete="off">
             </li>
             <li>
                 <label for ="tahun">Tahun Beli :</label>
                 <input type="text" name="tahun" id="tahun" required value="<?php echo $barang["tahun"]; ?>" autocomplete="off">
            </li>
            <li>
                <label for ="harga">Harga :</label>
                <input type="text" name="harga" id="harga" required value="<?php echo $barang["harga"]; ?>" autocomplete="off">
            </li>
            <li>
                <label for ="warna">Warna :</label>
                <input type="text" name="warna" id="warna" required value="<?php echo $barang["warna"]; ?>" autocomplete="off">
            </li>
            <li>
                <label for ="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" value="<?php echo $barang["gambar"]; ?>" autocomplete="off">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Barang!!</button>
            </li>
         </ul>
     </form>
</body>
</html>