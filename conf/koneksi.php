<?php
$koneksi = mysqli_connect('localhost','root','', 'spp_new');

if (mysqli_connect_errno()){
    echo "Koneksi Gagal : ". mysqli_connect_errno();
}
?>