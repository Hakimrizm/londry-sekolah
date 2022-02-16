<?php
include 'function/functions.php';

if( isset($_POST["register"]) ) {
    if( register($_POST) > 0 ) {
        echo "<script>alert('user baru berhasil ditambahkan!')</script>";
        header("Location: index.php");
    }else {
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
    <title>Registrasi</title>
</head>
<body>

<form action="" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username">

    <label for="password">Password</label>
    <input type="password" name="password" id="password">

    <label for="password2">Konfirmasi Pasword:</label>
    <input type="password" name="password2" id="password2">

    <button type="submit" name="register">Register</button>
</form>

</body>
</html>