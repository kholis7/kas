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
            <!-- /.box-header -->
            <div class="box-body">
              <form action="" method="">
                <div class="form-group col-sm-12">
                <label class="col-sm-2 control-label" for="kelas">Tahun ajaran</label>
                  <div class="col-sm-2">
                    <select class="form-control" name="tahun" id="tahun">
                      <?php
                        $periode = mysqli_query($koneksi,"SELECT * FROM tb_periode");
                        while ($p = mysqli_fetch_array($periode)){
                      ?>
                      <option value="<?php echo $p['id_periode']; ?>"><?php echo $p['periode_start'].' / '.$p['periode_end']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <label class="col-sm-2 control-label" for="kelas" >Cari Siswa</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="siswa" id="siswa" placeholder="Masukan NIS / NISN">
                  </div>
                  <div class="col-sm-2">
                    <button type="submit" class="btn btn-success">Cari</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <?php
        if(!isset($_GET['siswa'])){

        } else {
          $siswa = $_GET['siswa'];
          $data = mysqli_query($koneksi,"SELECT * FROM tb_siswa
          WHERE nisn like '%".$siswa."%' OR nipd like '%".$siswa."%' 
          OR nama_siswa like '%".$siswa."%' ");
          while ($d = mysqli_fetch_array($data)){
        ?>
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
                        <td><?php  ?></td>
                      </tr>
                      <tr>
                        <td>NIPD / NISN</td>
                        <td>:</td>
                        <td><?php echo $d['nisn']; ?></td>
                      </tr>
                      <tr>
                        <td>NAMA SISWA</td>
                        <td>:</td>
                        <td><?php echo $d['nama_siswa']; ?></td>
                      </tr>
                      <tr>
                        <td>KELAS</td>
                        <td>:</td>
                        <td><?php echo $d['id_kelas']; ?></td>
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
        <?php
          }
        }
      ?>
      

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