<?php
include '../../conf/koneksi.php';

//mengambil data id_kelas
$kelas = $_POST['kelas'];

$id_transaksi = $_POST['id_jenis'];
$tarif = $_POST['tarif'];
$bebas_tgl_input = date('Y-m-d');
$bebas_tgl_update = date('Y-m-d');

$dt_siswa = mysqli_query($koneksi,"SELECT * FROM tb_siswa 
            INNER JOIN tb_kelas ON tb_siswa.id_kelas = tb_kelas.id_kelas
            WHERE tb_siswa.id_kelas = '$kelas'
            ");
            while ($siswa = mysqli_fetch_array($dt_siswa)){
              $s[] = $siswa['id_siswa'];
            }
            
$jml = mysqli_num_rows($dt_siswa);

for ($i=0; $i<$jml; $i++){
  mysqli_query($koneksi,"INSERT INTO tb_bebas values ('', '$s[$i]', '$id_transaksi', '$tarif', '', '$bebas_tgl_input', '$bebas_tgl_update')");
}
header("location:../../index.php?page=jenis_pembayaran");