  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cek Pembayaran Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Cek Pembayaran Siswa</li>
      </ol>
    </section>

    <?php
      $id_siswa = $_GET['id_siswa'];
      $data = mysqli_query($koneksi,"SELECT * FROM tb_siswa
      INNER JOIN tb_kelas ON tb_siswa.id_kelas = tb_kelas.id_kelas
      WHERE id_siswa = '$id_siswa'");
      while ($d = mysqli_fetch_array($data)){
    ?>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <!-- <div class="box-header">
              <h4>Informasi Siswa</h4>
            </div> -->
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-md-9">
                <table class="table table-striped table-responsive">
                  <thead>
                    <tr>
                      <td style="width:20%;"><strong>TAHUN AJARAN</strong></td>
                      <td style="width:5%;">:</td>
                      <?php 
                        $periode = mysqli_query($koneksi, "SELECT * FROM tb_periode WHERE status = 1 "); 
                        while ($pr = mysqli_fetch_array($periode)){
                      ?>
                      <td><?php echo $pr['periode_start'].' / '.$pr['periode_end']; ?></td>
                      <?php } ?>
                    </tr>
                    <tr>
                      <td>NIPD / NISN</td>
                      <td>:</td>
                      <td><?php echo $d['nisn'].' / '. $d['nipd']; ?></td>
                    </tr>
                    <tr>
                      <td>NAMA SISWA</td>
                      <td>:</td>
                      <td><?php echo $d['nama_siswa']; ?></td>
                    </tr>
                    <tr>
                      <td>KELAS</td>
                      <td>:</td>
                      <td><?php echo $d['nama_kelas']; ?></td>
                    </tr>
                  </thead>
                </table>
              </div>
              <!-- <div class="col-md-3">
                <img src="gambar/avatar.png" class="img-thumbnail img-responsive">
              </div> -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <!-- <th>NISN / NIPD</th>
                  <th>NAMA SISWA</th> -->
                  <th>ID POS</th>
                  <!-- <th>ID TRANSAKSI</th> -->
                  <th>TAGIHAN</th>
                  <th>SISA</th>
                  <th>BAYAR</th>
                  <th>TANGGAL BAYAR</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <?php 
                    $id_siswa = $_GET['id_siswa'];
                    $dt_bebas = mysqli_query($koneksi,"SELECT * FROM tb_bebas
                    INNER JOIN tb_siswa on tb_bebas.id_siswa = tb_siswa.id_siswa
                    INNER JOIN tb_transaksi on tb_bebas.id_transaksi = tb_transaksi.id_transaksi
                    INNER JOIN tb_pos on tb_transaksi.id_pos = tb_pos.id_pos
                    WHERE tb_bebas.id_siswa = '$id_siswa'
                    ");
                    $no = 1;
                    while ($bebas=mysqli_fetch_array($dt_bebas)){
                  ?>
                  <td><?php echo $no++; ?></td>
                  <!-- <td><?php echo $bebas['nisn'].' / '. $bebas['nipd']; ?></td>
                  <td><?php echo $bebas['nama_siswa']; ?></td> -->
                  <td><?php echo $bebas['nama_pos']; ?></td>
                  <!-- <td><?php echo $bebas['jenis_transaksi']; ?></td> -->
                  <td><?php echo $bebas['bebas_biaya']; ?></td>
                  <td></td>
                  <!-- <td><?php echo $bebas['bebas_bayar']; ?></td> -->
                  <td>
                    <input type="text" class="form-control" id="bayar" name="bayar" placeholder="Masukan Jumlah">
                  </td>
                  <td><?php echo $bebas['bebas_tgl_bayar']; ?></td>
                  <td>
                    <a href="index.php?page=cek_bayar_detail&id_siswa=<?=$siswa['id_siswa'];?>" class="btn btn-xs btn-success" role="button" title="Bayar"><i class="fa fa-money"></i> Bayar</a>
                  </td>
                </tr>
                <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
      <?php
      }
    ?>
  </div>