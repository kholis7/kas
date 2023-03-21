  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        TAMBAH DATA SISWA
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Data Siswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->
            <div class="box-body">
              <form role="form" method="POST" action="pages/siswa/tambah_proses.php">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input type="number" class="form-control" id="nisn" name="nisn" placeholder="Masukan NISN">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nipd">NIPD</label>
                    <input type="number" class="form-control" id="nipd" name="nipd" placeholder="Masukan NIPD">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nama">NAMA LENGKAP</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan NIPD">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="jk">JK</label>
                    <select class="form-control" name="jk" id="jk">
                      <option value="L">Laki-laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="tmp_lahir">TEMPAT LAHIR</label>
                    <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" placeholder="Masukan Tempat Lahir">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="tgl_lahir">TANGGAL LAHIR</label>
                    <input type="date" class="form-control" id="tgl_lahir">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="kelas">KELAS</label>
                    <select class="form-control" name="kelas" id="kelas">
                      <?php
                      $kelas = mysqli_query($koneksi,"SELECT * FROM tb_kelas");
                      while ($k=mysqli_fetch_array($kelas)){
                      ?>
                      <option value="<?php echo $k['id_kelas']; ?>"><?php echo $k['nama_kelas']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="kejuruan">KEJURUAN</label>
                    <select class="form-control" name="kejuruan" id="kejuruan">
                      <?php
                        $kejuruan = mysqli_query($koneksi,"SELECT * FROM tb_kejuruan");
                        while ($kj = mysqli_fetch_array($kejuruan)){
                        ?>
                        <option value="<?php echo $kj['id_kejuruan']; ?>"><?php echo $kj['nama_kejuruan']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a class="btn btn-warning" href="index.php?page=data_siswa">Kembali</a>
                </div>
              </form>
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