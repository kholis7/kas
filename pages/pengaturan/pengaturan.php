  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Setting
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Setting</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
                <form role="form" method="POST" action="pages/pengaturan/pengaturan_proses.php">
                  <div class="box-body">
                    <?php
                        $set = mysqli_query($koneksi,"SELECT * FROM tb_pengaturan ");
                        while ($s = mysqli_fetch_array($set)){ 
                    ?>
                    <div class="form-group">
                      <label><?php echo $s['set_nama']; ?></label>
                      <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $s['set_value']; ?>" placeholder="Masukan Nama Yayasan">
                    </div>
                    <?php } ?>
                </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box box-primary">
              <div class="box-body">
                <button type="submit" class="btn btn-block btn-primary">Simpan</button>
                <a class="btn btn-block btn-warning" href="index.php?page=jenis_pembayaran">Kembali</a>
              </div>
            </div>
          </div>
        </div>
      </form>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->