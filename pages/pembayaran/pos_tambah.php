  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Tambah Pos Keuangan
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Pos Keuangan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <form role="form" method="POST" action="pages/pembayaran/pos_tambah_proses.php">
        <div class="row">
          <div class="col-md-9">
            <!-- general form elements -->
            <div class="box box-primary">
              <!-- form start -->
              <div class="box-body">
                  <div class="form-group">
                    <label for="pos">Nama POS</label>
                    <input type="text" class="form-control" name="pos" id="pos">
                  </div>
                  <div class="form-group">
                    <label for="periode">Keterangan</label>
                    <input type="text" class="form-control" name="ket" id="ket">
                  </div>
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