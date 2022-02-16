<?php

$conn = mysqli_connect("localhost", "root", "", "londry_hakim");

function query($query) {
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $nama_p = htmlspecialchars($data["pelanggan_nama"]);
    $no_hp = htmlspecialchars($data["pelanggan_hp"]);
    $alamat = htmlspecialchars($data["pelanggan_alamat"]);

    mysqli_query($conn, "INSERT INTO pelanggan VALUES('', '$nama_p', '$no_hp', '$alamat')");

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;

    mysqli_query($conn, "DELETE FROM pelanggan WHERE pelanggan_id = $id");
    return mysqli_affected_rows($conn);
}

function edit($data) {
    global $conn;

    $id = $data["pelanggan_id"];
    $nama_p = $data["pelanggan_nama"];
    $no_hp = $data["pelanggan_hp"];
    $alamat = $data["pelanggan_alamat"];

    $query = "UPDATE pelanggan SET
                pelanggan_nama = '$nama_p',
                pelanggan_hp = '$no_hp',
                pelanggan_alamat = '$alamat'
            WHERE pelanggan_id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function session($pesan) {
    if( isset($_SESSION["pesan"]) ) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Berhasil!</strong>, Pelanggan berhasil di". $data ."
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        unset($_SESSION["pesan"]);
    }
}

function register($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT username FROM admin WHERE username = '$username'");
    if( mysqli_fetch_assoc($result) ) {
        echo "<script>alert('username telah ada!');</script>";
        return false;
    }

    if( $password !== $password2 ) {
        echo "<script>alert('konfirmasi password tidak sesuai!');</script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO admin VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);

}