  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA PERIODE
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Periode</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
            <a href="index.php?page=tambah_periode" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> 
              Tambah
            </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>PERIODE</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <?php 
                    $dt_periode = mysqli_query($koneksi,"SELECT * FROM tb_periode
                    ");
                    $no = 1;
                    while ($periode=mysqli_fetch_array($dt_periode)){
                  ?>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $periode['periode_start']." / ". $periode['periode_end']; ?></td>
                  <td>
                    <a href="index.php?page=ubah_periode&id_periode=<?=$periode['id_periode'];?>" class="btn btn-xs btn-warning" role="button" title="Edit Data"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="pages/siswa/hapus_siswa.php?id_siswa=<?=$siswa['id_siswa'];?>" class="btn btn-xs btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
                    <a href="index.php?page=ubah_siswa&id_siswa=<?=$siswa['id_siswa'];?>" class="btn btn-xs btn-success" role="button" title="Aktifkan"><i class="fa fa-check"></i></a>
                  </td>
                </tr>
                <?php } ?>
                </tfoot>
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

