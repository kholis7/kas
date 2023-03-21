  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pilih SISWA
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pilih Siswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>NISN / NIPD</th>
                  <th>NAMA SISWA</th>
                  <th>JK</th>
                  <th>TMP LAHIR</th>
                  <th>TGL LAHIR</th>
                  <th>KELAS</th>
                  <th>KEJURUAN</th>
                  <th>BAYAR</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <?php 
                    $dt_siswa = mysqli_query($koneksi,"SELECT * FROM tb_siswa
                    INNER JOIN tb_kelas ON tb_siswa.id_kelas = tb_kelas.id_kelas
                    INNER JOIN tb_kejuruan ON tb_siswa.id_kejuruan = tb_kejuruan.id_kejuruan
                    ");
                    $no = 1;
                    while ($siswa=mysqli_fetch_array($dt_siswa)){
                  ?>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $siswa['nisn'].' / '. $siswa['nipd']; ?></td>
                  <td><?php echo $siswa['nama_siswa']; ?></td>
                  <td><?php echo $siswa['jk']; ?></td>
                  <td><?php echo $siswa['tmp_lahir']; ?></td>
                  <td><?php echo $siswa['tgl_lahir']; ?></td>
                  <td><?php echo $siswa['nama_kelas']; ?></td>
                  <td><?php echo $siswa['nama_kejuruan']; ?></td>
                  <td>
                    <a href="index.php?page=ubah_siswa&id_siswa=<?=$siswa['id_siswa'];?>" class="btn btn-xs btn-success" role="button" title="Bayar"><i class="fa fa-money"></i> Bayar</a>
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

