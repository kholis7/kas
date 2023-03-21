  <?php
  $id_siswa = $_GET['id_siswa'];
    $siswa = mysqli_query($koneksi,"SELECT * FROM tb_siswa where id_siswa = '$id_siswa'");
    while ($s = mysqli_fetch_array($siswa)){
  ?>
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
              <form role="form" method="POST" action="pages/siswa/ubah_proses.php">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input type="hidden" class="form-control" id="id_siswa" name="id_siswa" placeholder="Masukan NISN" value="<?= $s['id_siswa'];?>">
                    <input type="number" class="form-control" id="nisn" name="nisn" placeholder="Masukan NISN" value="<?= $s['nisn']; ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nipd">NIPD</label>
                    <input type="number" class="form-control" id="nipd" name="nipd" placeholder="Masukan NIPD" value="<?= $s['nipd']; ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nama">NAMA LENGKAP</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Lengkap"  value="<?= $s['nama_siswa']; ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="jk">JK</label>
                    <select class="form-control" name="jk" id="jk">
                      <option value="">- Pilih Jenis Kelamin</option>
                      <?php
                        if ($s['jk']=='L'){
                          echo "<option value='L' selected>Laki-laki</option>
                          <option value='P'>Perempuan</option>";
                        } else {
                          echo "<option value='P' selected>Perempuan</option>
                          <option value='L'>Laki-laki</option>";
                        }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="tmp_lahir">TEMPAT LAHIR</label>
                    <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" placeholder="Masukan Tempat Lahir" value="<?= $s['tmp_lahir']; ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="tgl_lahir">TANGGAL LAHIR</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $s['tgl_lahir']; ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="kelas">KELAS</label>
                    <select class="form-control" name="kelas" id="kelas">
                    <option value="">- Pilih Kelas</option>
                      <?php 						
                          // mengambil data kelas dari database
                          $data = mysqli_query($koneksi,"SELECT * from tb_kelas");						
                          // mengubah data ke array dan menampilkannya dengan perulangan while
                          while($k = mysqli_fetch_array($data)){
                              ?>
                              <option <?php if($s['id_kelas']==$k['id_kelas']){echo "selected='selected'";} ?> value="<?php echo $k['id_kelas']; ?>"><?php echo $k['nama_kelas']; ?></option>
                              <?php 
                          }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="kejuruan">KEJURUAN</label>
                    <select class="form-control" name="kejuruan" id="kejuruan">
                      <option value="">- Pilih Kejuruan</option>
                        <?php 						
                            // mengambil data kelas dari database
                            $data = mysqli_query($koneksi,"SELECT * from tb_kejuruan");						
                            // mengubah data ke array dan menampilkannya dengan perulangan while
                            while($kj = mysqli_fetch_array($data)){
                                ?>
                                <option <?php if($s['id_kejuruan']==$kj['id_kejuruan']){echo "selected='selected'";} ?> value="<?php echo $kj['id_kejuruan']; ?>"><?php echo $kj['nama_kejuruan']; ?></option>
                                <?php 
                            }
                        ?>
                    </select>
                    </select>
                  </div>
                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a class="btn btn-warning" href="index.php?page=data_siswa">Kembali</a>
                </div>
              </form>
    <?php
    }
    ?>
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