  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        JENIS PEMBAYARAN
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Jenis Pembayaran</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
            <a href="index.php?page=jenis_tambah" class="btn btn-success" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> 
              Tambah
            </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>POS</th>
                  <th>NAMA PEMBAYARAN</th>
                  <th>TIPE</th>
                  <th>TAHUN</th>
                  <th>TARIF</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <?php 
                    $transaksi = mysqli_query($koneksi,"SELECT * FROM tb_transaksi
                    INNER JOIN tb_pos ON tb_transaksi.id_pos = tb_pos.id_pos
                    INNER JOIN tb_periode ON tb_transaksi.id_periode = tb_periode.id_periode
                    ");
                    $no = 1;
                    while ($tr=mysqli_fetch_array($transaksi)){
                  ?>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $tr['nama_pos']; ?></td>
                  <td><?php echo $tr['nama_pos'].' - T.A '.$tr['periode_start'].'/'.$tr['periode_end']; ?></td>
                  <td><?php echo $tr['jenis_transaksi']; ?></td>
                  <td><?php echo $tr['periode_start'].'/'.$tr['periode_end']; ?></td>
                  <td><a href="index.php?page=tarif&id_pos=<?=$tr['id_pos'];?>" class="btn btn-xs btn-primary"> Setting Biaya Pembayaran</a></td>
                  <td>
                    <a href="index.php?page=ubah_pos&id_pos=<?=$pos['id_siswa'];?>" class="btn btn-xs btn-success" role="button" title="Edit Data"><i class="glyphicon glyphicon-edit"></i></a>
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

