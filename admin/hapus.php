<?php

include '../function/functions.php';
$id = $_GET["id"];

if( hapus($id) > 0 ) {
    echo "<script>alert('Pelanggan berhasil dihapus!');
        document.location.href = 'index.php';
    </script>";
}else {
    echo "<script>alert('Pelanggan gagal dihapus!');</script>";
}

?>