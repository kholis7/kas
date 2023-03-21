<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];

    switch ($page){
        //Siswa
        case 'data_siswa' :
            include 'pages/siswa/data_siswa.php';
            break;
        case 'tambah_siswa' :
            include 'pages/siswa/tambah_siswa.php';
            break;
        case 'ubah_siswa' :
            include 'pages/siswa/ubah_siswa.php';
            break;
            
        // Pembayaran
        case 'pos_pembayaran' :
            include 'pages/pembayaran/pos_pembayaran.php';
            break;
        case 'pos_tambah' :
            include 'pages/pembayaran/pos_tambah.php';
            break;
        case 'jenis_pembayaran' :
            include 'pages/pembayaran/jenis_pembayaran.php';
            break;
        case 'jenis_tambah' :
            include 'pages/pembayaran/jenis_tambah.php';
            break;
        case 'jenis_tambah_proses' :
            include 'pages/pembayaran/jenis_tambah_proses.php';
            break;

        //Tarif
        case 'tarif' :
            include 'pages/pembayaran/tarif.php';
            break;

        //Setting tarif berdasarkan kelas
        case 'bebas_tambah' :
            include 'pages/pembayaran/bebas_tambah.php';
            break;

        //Transaksi
        case 'data_transaksi' :
            include 'pages/transaksi/data_transaksi.php';
            break;
            
        case 'bayar' :
            include 'pages/transaksi/bayar.php';
            break;
        case 'cek_bayar' :
            include 'pages/transaksi/cek_bayar.php';
            break;
        case 'cek_bayar_detail' :
            include 'pages/transaksi/cek_bayar_detail.php';
            break;
        case 'transaksi_siswa' :
            include 'pages/transaksi/transaksi_siswa.php';
            break;
        case 'tambah_transaksi' :
            include 'pages/transaksi/tambah_transaksi.php';
            break;
        case 'transaksi_proses' :
            include 'pages/transaksi/transaksi_proses.php';
            break;

        case 'pengaturan' :
            include 'pages/pengaturan/pengaturan.php';
            break;

        case 'periode' :
            include 'pages/periode/periode.php';
            break;
    }
} else {
    include 'pages/dashboard.php';
}
?>