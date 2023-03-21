<?php
include "../../conf/koneksi.php";

$id_siswa = $_POST['id_siswa'];
$nisn = $_POST['nisn'];
$nipd = $_POST['nipd'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$kelas = $_POST['kelas'];
$kejuruan = $_POST['kejuruan'];

mysqli_query($koneksi,"UPDATE tb_siswa SET nisn='$nisn', nipd='$nipd', nama_siswa='$nama', jk='$jk', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', id_kelas = '$kelas', id_kejuruan='$kejuruan' 
WHERE id_siswa = '$id_siswa'
");

header("location:../../index.php?page=data_siswa");
?>