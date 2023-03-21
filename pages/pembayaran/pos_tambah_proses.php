<?php
include "../../conf/koneksi.php";

$pos = $_POST['pos'];
$ket = $_POST['ket'];

mysqli_query ($koneksi,"INSERT INTO tb_pos values ('', '$pos', '$ket')");

header("location:../../index.php?page=pos_pembayaran");
?>