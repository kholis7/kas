  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        TARIF Tagihan
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tarif Tagihan</li>
      </ol>
    </section>

    <?php
    $id_pos = $_GET['id_pos'];
      $transaksi = mysqli_query($koneksi,"SELECT * FROM tb_transaksi
      INNER JOIN tb_pos ON tb_transaksi.id_pos = tb_pos.id_pos
      INNER JOIN tb_periode ON tb_transaksi.id_periode = tb_periode.id_periode
      where tb_transaksi.id_pos = '$id_pos'");
      while ($tr = mysqli_fetch_array($transaksi)){
    ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3>Tarif - <?php echo $tr['nama_pos'].' - T.A '.$tr['periode_start'].'/'.$tr['periode_end']; ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="" method="GET">
                <div class="form-group col-sm-12">
                  <label class="col-sm-1 control-label" for="Tahun">Tahun</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="tahun" id="tahun" value="<?php echo $tr['periode_start'].'/'.$tr['periode_end']; ?>" readonly>
                  </div>
                  <label class="col-sm-1 control-label" for="kelas">Kelas</label>
                  <div class="col-sm-2">
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
                  <div class="col-sm-2">
                    <button type="submit" class="btn btn-success">Cari/Tampilkan</button>
                  </div>
                </div>
              </form>
              <!-- <label class="col-sm-2">Setting Tarif</label>
              <div class="col-sm-10">
                <a href="index.php?page=bebas_tambah&id_pos=<?=$tr['id_pos'];?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"> Berdasarkan Kelas</i></a>
                <a href="index.php?page=tarif&id_pos=<?=$tr['id_pos'];?>" class="btn btn-success btn-sm"><i class="fa fa-plus"> Berdasarkan Siswa</i></a>
                <a href="" class="btn btn-default btn-sm"><i class="fa fa-reply-all"> Kembali</i></a>
              </div> -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div class="box box-primary">
            <div class="box-body table-responsive">
              <table class="table table-bordered table-hover">
                <tbody>
                  <tr>
                    <th>NO</th>
                    <th>NISN / NIPD</th>
                    <th>NAMA SISWA</th>
                    <th>KELAS</th>
                    <th>PEMBAYARAN</th>
                    <th>TARIF</th>
                  </tr>
                </tbody>
                <?php 
                $siswa = mysqli_query($koneksi,"SELECT * FROM tb_siswa
                INNER JOIN tb_kelas ON tb_siswa.id_kelas = tb_kelas.id_kelas
                ");
                $no=1;
                while ($s = mysqli_fetch_array($siswa)){
                ?>
                <tbody>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $s['nisn'].' / '.$s['nipd']; ?></td>
                    <td><?php echo $s['nama_siswa']; ?></td>
                    <td><?php echo $s['nama_kelas']; ?></td>
                    <td><?php echo $tr['nama_pos'].' - T.A '.$tr['periode_start'].'/'.$tr['periode_end']; ?></td>
                    <td><input type="number" name="tarif" class="form-control"></td>
                  </tr>
                </tbody>
                <?php } ?>
              </table>
            </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php }
  ?>