<?php
require "functions.php";
if (isset($_POST["registrasi"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
                alert ('user baru berhasil ditambahkan!!')
                </script>";
    } else {
        echo mysqli_error($conn);
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrsi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>

    <h1>Halaman Registrasi</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="username" name="username" id="username" required autocomplete="off">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" required autocomplete="off">
            </li>
            <li>
                <label for="password2">Konfirmasi Password :</label>
                <input type="password" name="password2" id="password2" required>
            </li>
            <br>
            <li>
                <button type="submit" name="registrasi">Registrasi!</button>
            </li>
        </ul>


        <a href="login.php">Login</a>
        <p>jika sudah punya akun</p>
        <!-- saep, 123
admin, 321
saepudin, 123456 -->
    </form>
</body>

</html>