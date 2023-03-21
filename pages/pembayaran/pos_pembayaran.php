  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        POS PEMBAYARAN
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pos Pembayaran</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
            <a href="index.php?page=pos_tambah" class="btn btn-success" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> 
              Tambah
            </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>NAMA POS</th>
                  <th>KETERANGAN</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <?php 
                    $dt_pos = mysqli_query($koneksi,"SELECT * FROM tb_pos
                    ");
                    $no = 1;
                    while ($pos=mysqli_fetch_array($dt_pos)){
                  ?>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $pos['nama_pos']; ?></td>
                  <td><?php echo $pos['ket']; ?></td>
                  <td>
                    <a href="index.php?page=ubah_pos&id_pos=<?=$pos['id_siswa'];?>" class="btn btn-xs btn-success" role="button" title="Edit Data"><i class="glyphicon glyphicon-edit"></i></a>
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

