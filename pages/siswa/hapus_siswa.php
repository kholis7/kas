<?php
include "../../conf/koneksi.php";

$id_siswa = $_GET['id_siswa'];

mysqli_query($koneksi,"DELETE FROM tb_siswa where id_siswa = '$id_siswa'");

header("location:../../index.php?page=data_siswa");
?>