<?php

include '../function/functions.php';
$id = $_GET["id"];

if( hapusTransaksi($id) > 0 ) {
  $_SESSION["pesanT"] = 'Data gagal dihapus';
  header("Location: transaksi.php");
}else {
  $_SESSION["pesanT"] = 'Data berhasil dihapus';
  header("Location: transaksi.php");
}

?>