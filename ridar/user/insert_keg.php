<?php  session_start();
        
         
          if($_SESSION['level']==""){
            header("location:index.php?pesan=gagal");
          }?>
<?php
include("koneksi.php");

$query = "SELECT max(id_keg) as maxKode FROM kegiatan";
$hasil = mysqli_query($db,$query);
$data = mysqli_fetch_array($hasil);
$kode_keg = $data['maxKode'];
$noUrut = (int) substr($kode_keg, 3, 3);
$noUrut++;
$char = "KEG";
$kode_keg = $char . sprintf("%03s", $noUrut);
?>

         <!-- sidebar menu -->
         <?php
          include('head_sidebar.php')
          ?>
  
      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
                     </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Input Data Kegiatan</h2>
                 
                  <div class="clearfix"></div>
                </div>
               
                    <form action="load-keg.php" method="post" enctype="multipart/form-data">
                    
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">ID Kegiatan<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="id_keg" 
                          type="text" required="required"  value="<?php echo $kode_keg ?>" readonly /></div>
                   
                    </div>
                    
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Kegiatan<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="nama_keg" 
                          type="text" required/></div>
                   
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Gambar Kegiatan<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="gambar" type="file" required/>
                        </div>
                    </div>

                   
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Progress Kegiatan<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                 
                      <textarea class="resizable_textarea form-control" name="progress" placeholder="Detail Progress" required></textarea>
                    </div>
                   
                    </div>
              
                    <div class="field item form-group">
                    <label class="control-label col-md-3 col-sm-3 label-align">Keterangan</label>
                    <div class="col-md-6 col-sm-6 ">
                      <textarea class="resizable_textarea form-control" name="ket" placeholder="Keterangan" required></textarea>
                    </div>
                  </div>

                 <!-- <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Umur Kegiatan (Hari)<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="umur_keg" 
                          type="text" required="required" placeholder="Contoh : 2"/></div>
                   
                    </div>-->

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Sebab<span
                          class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 ">
                      <textarea class="resizable_textarea form-control" name="sebab" placeholder="Jelaskan Sebab" required></textarea>
                    </div>
                  </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Impact<span
                          class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 ">
                      <textarea class="resizable_textarea form-control" name="impact" placeholder="Jelaskan Impact" required></textarea>
                    </div>
                  </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Solusi<span
                          class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 ">
                      <textarea class="resizable_textarea form-control" name="solusi" placeholder="Jelaskan Solusi" required></textarea>
                    </div>
                  </div>
       
                    <div class="ln_solid" align="center">
                      <div class="form-group">
                        <div class="col-md-6 offset-md-3">
                        <button type='reset' class="btn btn-success">Reset</button>
                    <button type='submit' name='kirim' class="btn btn-primary">Submit</button>
                  
                        </div>
                      </div>
                    </div>
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <?php
          include('footer.php')
        ?>

</body>
</html>