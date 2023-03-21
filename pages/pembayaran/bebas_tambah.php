<?php
    $id_pos = $_GET['id_pos'];
      $transaksi = mysqli_query($koneksi,"SELECT * FROM tb_transaksi
      INNER JOIN tb_pos ON tb_transaksi.id_pos = tb_pos.id_pos
      INNER JOIN tb_periode ON tb_transaksi.id_periode = tb_periode.id_periode
      where tb_transaksi.id_pos = '$id_pos'");
      while ($tr = mysqli_fetch_array($transaksi)){
    ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Tambah Tarif Pembayaran
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Tarif Pembayaran</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <form class="form-horizontal" method="POST" action="pages/pembayaran/bebas_tambah_proses.php">
        <div class="row">
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-danger">
              <div class="box-header">
                <h3 class="box-title">Informasi Pembayaran</h3>
              </div>
              <!-- form start -->
              <div class="box-body">
                  <div class="form-group">
                    <label for="pos" class="col-sm-4 control-label">Informasi Pembayaran</label>
                    <div class="col-sm-8">
                      <input type="hidden" name="id_pos" id="id_pos" value="<?php echo $tr['id_pos']; ?>">
                      <input type="text" class="form-control" name="pos" id="pos" value="<?php echo $tr['nama_pos'].' - T.A '.$tr['periode_start'].'/'.$tr['periode_end']; ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="periode" class="col-sm-4 control-label">Tahun Ajaran</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="periode" id="periode" value="<?php echo $tr['periode_start'].'/'.$tr['periode_end']; ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="jenis" class="col-sm-4 control-label">TIPE</label>
                      <div class="col-sm-8">
                        <input type="hidden" class="form-control" name="id_jenis" id="id_jenis" value="<?php echo $tr['id_transaksi']; ?>">
                        <input type="text" class="form-control" name="jenis" id="jenis" value="<?php echo $tr['jenis_transaksi']; ?>" readonly>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-success">
              <div class="box-header">
                <h3 class="box-title">Tarif Tagihan Per Kelas</h3>
              </div>
              <div class="box-body">
                  <div class="form-group">
                    <label for="pos" class="col-sm-4 control-label">Kelas</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="kelas" id="kelas">
                        <option value="all">-- Semua Kelas --</option>
                        <?php
                          $kelas = mysqli_query($koneksi,"SELECT * FROM tb_kelas");
                          while ($k = mysqli_fetch_array($kelas)){
                        ?>
                        <option value="<?php echo $k['id_kelas']; ?>"><?php echo $k['nama_kelas']; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <label for="pos" class="col-sm-4 control-label">Siswa</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="siswa" id="siswa">
                        <?php
                          $siswa = mysqli_query($koneksi,"SELECT * FROM tb_siswa");
                          while ($s = mysqli_fetch_array($siswa)){
                        ?>
                        <option value="<?php echo $s['id_siswa']; ?>"><?php echo $s['nama_siswa']; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div> -->
                  <div class="form-group">
                    <label for="periode" class="col-sm-4 control-label">Tarif (Rp.)</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="tarif" id="tarif" placeholder="Rp. 150.000,-"></input>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-8">
                      <button type="submit" class="btn btn-success">Submit</button>
                      <a href="index.php?page=tarif&id_pos=<?=$tr['id_pos'];?>" class="btn btn-warning">Cancel</a>
                    </div>
                  </div>
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
  <?php } ?>