<?php
include "../../conf/koneksi.php";

$jenis = $_POST['jenis'];
$periode = $_POST['periode'];
$pos = $_POST['pos'];
$tanggal = date('Y-m-d');

mysqli_query ($koneksi,"INSERT INTO tb_transaksi values ('', '$jenis', '$periode', '$pos', '$tanggal')");

header("location:../../index.php?page=jenis_pembayaran");
?>