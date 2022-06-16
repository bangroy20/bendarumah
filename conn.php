<?php  
session_start();

if ( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require "functions.php";
$benda = query("SELECT * FROM benda");

// jika tombol cari ditekan
if ( isset($_POST["cari"])) {
    $benda = cari($_POST["keywoard"]);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benda Rumah</title>
</head>
<body>

<a href="logout.php">Logout !!</a>
    <h1>Daftar Benda rumah</h1>

    <a href="tambah.php">Tambah benda rumah</a>
    <br>
    <br>

    <form action="" method="post">
        <input type="text" name="keywoard" size="30" autofocus placeholder="masukan keywoard pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>
    <br>

    <table border = "1" cellpadding = "10" cellspacing = "0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Tahun Beli</th>
        <th>Harga</th>
        <th>Warna</th>
    </tr>

    <?php  $i=1;  ?>
    <?php  foreach ($benda as $row) : ?>
    <tr>
        <td><?php echo $i ?></td>
        <td>
            <a href="ubah.php?id=<?php echo $row["id"]; ?>">ubah</a> |
            <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin ingin menghapus??')">hapus</a>
        </td>
        <td>gambar</td>
        <td><?php echo $row["nama"]; ?></td>
        <td><?php echo $row["tahun"]; ?></td>
        <td><?php echo $row["harga"]; ?></td>
        <td><?php echo $row["warna"]; ?></td>
    </tr>
    <?php  $i++;  ?>
    <?php  endforeach;  ?>
    </table>
</body>
</html>