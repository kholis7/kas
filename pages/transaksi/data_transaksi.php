  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pembayaran Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pembayaran Siswa</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h4>Filter Data Pembayaran Siswa</h4>
            </div>
            <?php
              $periode = mysqli_query($koneksi,"SELECT * FROM tb_periode");
              while ($p = mysqli_fetch_array($periode)){
            ?>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="page=data_transaksi" method="get">
                <div class="form-group col-sm-12">
                <label class="col-sm-2 control-label" for="kelas">Tahun ajaran</label>
                  <div class="col-sm-2">
                    <select class="form-control" name="tahun" id="tahun">
                      <option value="<?php echo $p['id_periode']; ?>"><?php echo $p['periode_start'].' / '.$p['periode_end']; ?></option>
                    </select>
                  </div>
                  <label class="col-sm-2 control-label" for="kelas" >Cari Siswa</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="siswa" id="siswa" placeholder="Masukan NIS / NISN">
                  </div>
                  <div class="col-sm-2">
                    <input type="submit" class="btn btn-success" value="Cari">
                  </div>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
            <?php } ?>
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