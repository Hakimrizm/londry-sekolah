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

function hapusTransaksi($id) {
    global $conn;

    mysqli_query($conn, "DELETE FROM transaksi WHERE transaksi_id=$id");
    mysqli_query($conn, "DELETE FROM pakaian WHERE pakaian_transaksi=$id");
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

function gantiPass($data) {
    global $conn;

    $username = $data["username"];
    $passwordLama = $data["password"];
    $passwordBaru = $data["passwordBaru"];
    $password2 = $data["password2"];

    // Jika password baru dan konfirmasi password tidak sesuai maka lakukan ini
    if( $passwordBaru != $password2 ) {
        echo "<script>alert('Konfirmasi password tidak sesuai!');</script>";
        return false;
    }

    $result = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username'");

    if( mysqli_num_rows($result) === 1 ) {
        // Tangkap semua data dari username yang dimasukan
        $row = mysqli_fetch_assoc($result);
        // Verify password tersebut dan cek apabila password lama sesuai lakukan ini
        if( password_verify($passwordLama, $row["password"]) ) {
            // Enkripsi password baru
            $passwordBaru = password_hash($passwordBaru, PASSWORD_DEFAULT);
            $query = "UPDATE admin SET
                        password='$passwordBaru'
                        WHERE username='$username'";
            mysqli_query($conn, $query);

        }else {
            // Jika password lama salah
            echo "<script>alert('Password lama salah!')</script>";
            return false;
        }
    }

    return mysqli_affected_rows($conn);
}

function ubahHarga($data) {
    global $conn;

    $harga = $data["harga_per_kilo"];

    $query = "UPDATE harga SET harga_per_kilo = $harga";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahT($data) {
    global $conn;

    $pelanggan = $data["pelanggan"];
    $berat = $data["transaksi_berat"];
    $tgl_selesai = $data["transaksi_tgl_selesai"];
    $tanggal_hari_ini = date("Y-m-d");
    $status = 0;

    $result = mysqli_query($conn, "SELECT * FROM harga");
    $harga_per_kilo = mysqli_fetch_assoc($result);

    $harga = $berat * $harga_per_kilo["harga_per_kilo"];

    mysqli_query($conn, "INSERT INTO transaksi VALUES('', '$tanggal_hari_ini', $pelanggan, $harga, $berat, '$tgl_selesai', $status)");

    $id_terakhir = mysqli_insert_id($conn);
    $pakaian_jenis = $data["pakaian_jenis"];
    $pakaian_jumlah = $data["pakaian_jumlah"];
    $i = 0;
    foreach( $pakaian_jenis as $pakaian ) {
        if( $pakaian != "" ) {
            mysqli_query($conn, "INSERT INTO pakaian VALUES ('','$id_terakhir', '$pakaian', '$pakaian_jumlah[$i]')");
        }
        $i++;
    }

    return mysqli_affected_rows($conn);
}

function editTransaksi($data) {
    global $conn;

    $id = $data["id"];
    $pelanggan = $data["pelanggan"];
    $berat = $data["transaksi_berat"];
    $tgl_selesai = $data["transaksi_tgl_selesai"];
    $status = $data["status"];

    $result = mysqli_query($conn, "SELECT * FROM harga");
    $harga_per_kilo = mysqli_fetch_assoc($result);
    $harga = $berat * $harga_per_kilo["harga_per_kilo"];

    mysqli_query($conn, "UPDATE transaksi SET
                    transaksi_pelanggan = $pelanggan,
                    transaksi_harga = $harga,
                    transaksi_berat = $berat,
                    transaksi_tgl_selesai = '$tgl_selesai',
                    transaksi_status = $status
                    WHERE transaksi_id = $id");
    
    $pakaian_jenis = $data["pakaian_jenis"];
    $pakaian_jumlah = $data["pakaian_jumlah"];
    mysqli_query($conn, "DELETE FROM pakaian WHERE pakaian_transaksi=$id");
    $i = 0;
    foreach( $pakaian_jenis as $pakaian ) {
        if( $pakaian != "" ) {
            mysqli_query($conn, "INSERT INTO pakaian VALUES('', $id, '$pakaian', $pakaian_jumlah[$i])");
        }
        $i++;
    }

    return mysqli_affected_rows($conn);
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