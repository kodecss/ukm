  <?php include "header.php";?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include "sidemenu.php";?>

  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Aspirasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Aspirasi</a></li>
              <li class="breadcrumb-item active">-</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="aspirasipilih">
                        <option class="form-control" value="0">--PILIH--</option>
                        <option class="form-control" value="1">Perijinan</option>
                        <option class="form-control" value="2">Sertifikasi</option>
                        <option class="form-control" value="3">Pembinaan</option>
                        <option class="form-control" value="4">Pameran</option>
                        <option class="form-control" value="5">Peralatan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row" id="1">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis</label>
                    <div class="col-sm-10">
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">IUMK</label>
                          <br>
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">NIB</label>
                          <br>
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">IUI</label>
                        </div>
                    </div>
                  </div>
                  <div class="form-group row" id="2">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis</label>
                    <div class="col-sm-10">
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">PIRT</label>
                          <br>
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">HKI</label>
                          <br>
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Halal</label>
                        </div>
                    </div>
                  </div>
                  <div class="form-group row" id="3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis</label>
                    <div class="col-sm-10">
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Pelatihan</label>
                          <br>
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Manajemen</label>
                        </div>
                    </div>
                  </div><div class="form-group row" id="4">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis</label>
                    <div class="col-sm-10">
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Daerah</label>
                          <br>
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Nasional</label>
                        </div>
                    </div>
                  </div><div class="form-group row" id="5">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Uraian</label>
                    <div class="col-sm-10">
                      <textarea class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Upload proposal</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Simpan</button>
                  <button type="submit" class="btn btn-danger">Batal</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include "footer.php";?>
