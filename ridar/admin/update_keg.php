        
        <?php  session_start();
        
          // cek apakah yang mengakses halaman ini sudah login
          if($_SESSION['level']==""){
            header("location:index.php?pesan=gagal");
          }?>
         
         
         <!-- sidebar menu -->
         <?php
          include('head_sidebar.php');
        
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
                  <h2>Update Data Kegiatan</h2>
                 
                  <div class="clearfix"></div>
                </div>
             
              
                    <form action="load-upkeg.php" method="post" enctype="multipart/form-data">
                    <?php
                    include "koneksi.php";
                    $id = $_GET['id_keg'];
                    $query = mysqli_query($db, " select
                    id_keg,
                    nama_keg,
                    foto_keg,
                    date_start,
                    date_updated,
                    date_closed,
                    progress,
                    ket,
                    umur_keg,
                    sebab,
                    impact,
                    solusi
                    from kegiatan 
                    WHERE id_keg='$id' ");

                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                  
                 <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">ID Kegiatan<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="id_keg" 
                          type="text" required="required"  value="<?php echo $data['id_keg']?>" readonly /></div>
                   
                    </div>
                    
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Kegiatan<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="nama_keg" 
                          type="text" required="required" value="<?php echo $data['nama_keg'] ?>"/></div>
                   
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Gambar Kegiatan<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                      <input type="file" name="imdata" class="form-control"   
                        required="required"  />
                        </div></div>
                    
                        <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Date Start<span
                          class="required">*</span></label>
                          <div class="col-md-6 col-sm-6"> 
					<input type="text"  name="datestart" class="form-control" value="<?php echo date("d-m-Y", strtotime($data['date_start'])); ?>" readonly />
		
				</div>	
        </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Date Updated<span
                          class="required">*</span></label>
                          <div class="col-md-6 col-sm-6"> 
					<input type="text"  name="dateclose" class="form-control" value="<?php echo date("d-m-Y"); ?>" readonly />
		
				</div>	
        </div>

        <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Date Closed<span
                          class="required">*</span></label>
                          <div class="col-md-6 col-sm-6"> 
					<input type="text"  name="dateclose" class="form-control" value="<?php echo date("d-m-Y"); ?>" readonly />
		
				</div>	
        </div>
                   
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Progress Kegiatan<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                 
                      <textarea class="resizable_textarea form-control" name="progress" > <?php echo $data['progress'] ?> </textarea>
                    </div>
                   
                    </div>
              
                    <div class="field item form-group">
                    <label class="control-label col-md-3 col-sm-3 label-align">Keterangan</label>
                    <div class="col-md-6 col-sm-6 ">
                      <textarea class="resizable_textarea form-control" name="ket" > <?php echo $data['ket'] ?> </textarea>
                    </div>
                  </div>

                  <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Umur Kegiatan (Hari)<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="umur_keg" 
                          type="text" required="required" value="<?php echo $data['umur_keg']  ?>"readonly/></div>
                   
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Sebab<span
                          class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 ">
                      <textarea class="resizable_textarea form-control" name="sebab" ><?php echo $data['sebab'] ?></textarea>
                    </div>
                  </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Impact<span
                          class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 ">
                      <textarea class="resizable_textarea form-control" name="impact" ><?php echo $data['impact'] ?></textarea>
                    </div>
                  </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Solusi<span
                          class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 ">
                      <textarea class="resizable_textarea form-control" name="solusi" ><?php echo $data['solusi'] ?></textarea>
                    </div>
                  </div>
                    
                
                    
                    <div class="ln_solid" align="center">
                      <div class="form-group">
                        <div class="col-md-6 offset-md-3">
                        <button class="btn btn-success" a href="home.php">Cancel</a></button>
                    <button type='submit' class="btn btn-primary">Update</button>
                  
                        </div>
                      </div>
                    </div>
                  </form>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->
      <?php
          include('footer.php')
        ?>

</body>

</html>