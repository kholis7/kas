  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        TAMBAH TRANSAKSI
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Transaksi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <form role="form" method="POST" action="pages/transaksi/transaksi_proses.php">
            <div class="col-md-6">
              <div class="form-group">
                <label>Pilih Siswa</label>
                <select class="form-control select2">
                  <option>- Pilih Siswa</option>
                  <?php
                      $siswa = mysqli_query($koneksi,"SELECT * FROM tb_siswa");
                      while ($s=mysqli_fetch_array($siswa)){
                      ?>
                      <option value="<?php echo $s['id_siswa']; ?>"><?php echo $s['nama_siswa']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>  
          <div class="col-md-6">
              <div class="form-group">
                <label>Pilih Pembayaran</label>
                <select class="form-control select2">
                  <option>- Pilih Pembayaran</option>
                  <?php
                      $pembayaran = mysqli_query($koneksi,"SELECT * FROM tb_pembayaran
                      ");
                      while ($pmb=mysqli_fetch_array($pembayaran)){
                      ?>
                      <option value="<?php echo $pmb['id_pembayaran']; ?>"><?php echo $pmb['nama_pembayaran']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tangggal" class="form-control" id="tanggal" value="<?php echo date('Y-m-d'); ?>" readonly>
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="form-group">
                <label for="bayar">Jumlah Bayar</label>
                <input type="text" name="bayar" class="form-control" id="bayar" placeholder="Masukan Jumlah Pembayaran">
              </div>
            </div>
            <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Proses</button>
                  <a class="btn btn-warning" href="index.php?page=data_transaksi">Kembali</a>
                </div>
          </form>
        </div>
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->