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
            <div class="box box-success">
              <div class="box-header">
                <h4>Informasi Siswa</h4>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="col-md-9">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <td>TAHUN AJARAN</td>
                        <td>:</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>NIPD / NISN</td>
                        <td>:</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>NAMA SISWA</td>
                        <td>:</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>KELAS</td>
                        <td>:</td>
                        <td></td>
                      </tr>
                    </thead>
                  </table>
                </div>
                <div class="col-md-3">
                  <img src="gambar/avatar.png" class="img-thumbnail img-responsive">
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        <!-- /.col -->
        </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-12">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#bulan" data-toggle="tab">Bulanan</a></li>
                <li><a href="#bebas" data-toggle="tab">Bebas</a></li>
              </ul>
              <div class="tab-content">
                <div class="active tab-pane" id="bulan">
                  <div class="box-body">
                    <table class="table tabel-bordered table-striped table-responsive">
                      <tr class="info">
                        <td>NO</td>
                        <td>NAMA PEMBAYARAN</td>
                        <td>SISA TAGIHAN</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Seragam Olahraga</td>
                        <td>250.000</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="bebas">
                <div class="box-body">
                    <table class="table tabel-bordered table-striped table-responsive">
                      <tr class="info">
                        <td>NO</td>
                        <td>JENIS PEMBAYARAN</td>
                        <td>TOTAL TAGIHAN</td>
                        <td>DIBAYAR</td>
                        <td>STATUS</td>
                        <td>BAYAR</td>
                      </tr>
                      <?php
                      $tagihan = mysqli_query($koneksi,"SELECT * FROM tb_bebas");
                      ?>
                      <tr>
                        <td>1</td>
                        <td>Seragam Olahraga</td>
                        <td>250.000</td>
                        <td>250.000</td>
                        <td>
                          <?php
                          $bayar = 0;
                          if ($bayar==0){ ?>
                            <label class="btn btn-xs btn-success">Lunas</label>
                          <?php }
                          ?>
                        </td>
                        <td>
                          <a href="" class="btn btn-success btn-xs" title="Bayar">
                            <span class="fa fa-money"> </span> Bayar
                          </a>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->