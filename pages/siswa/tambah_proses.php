<?php
include "../../conf/koneksi.php";

$nisn = $_POST['nisn'];
$nipd = $_POST['nipd'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$kelas = $_POST['kelas'];
$kejuruan = $_POST['kejuruan'];

mysqli_query($koneksi,"INSERT INTO tb_siswa values ('', '$nisn', '$nipd', '$nama', '$jk', '$tmp_lahir', '$tgl_lahir', '$kelas', '$kejuruan')");

header("location:../../index.php?page=data_siswa");
?>