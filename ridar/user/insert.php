<?php  session_start();
        
          if($_SESSION['level']==""){
            header("location:../index.php?pesan=gagal");
          }?>
<?php
include("koneksi.php");
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
                  <h2>Input Data Site</h2>
                 
                  <div class="clearfix"></div>
                </div>
               
                    <form action="load-insert.php" method="post" enctype="multipart/form-data">
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Site ID<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="id" 
                          type="text" required="required"/></div>
                   
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Site Name<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="sitename" 
                          type="text" required="required"/></div>
                    </div>
                   

                    <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Owner Tower Name<span
                          class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <select name="nama_owner" class="select2_single form-control" required>
                          <option value="">[Pilih Owner Tower] </option>
      <?php
		
      $row = mysqli_query($db,"select * from owner order by owner_name asc");
      while($a = mysqli_fetch_assoc($row))
			{
				echo '<option value="'.$a['owner_id'].'">'.$a['owner_name'].'</option>';				
			}
			?>
                          
                          </select>
                        </div>
                      </div>

                
                    
                    <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Technical Area Name<span
                          class="required">*</span></label>
                          <div class="col-md-6 col-sm-6">
                          <select name="nama_area" class="select2_single form-control" required>
                          <option value="">[Pilih Technical Area] </option>
      <?php
		
      $row = mysqli_query($db,"select * from area order by area_id asc");
      while($a = mysqli_fetch_assoc($row))
			{
				echo '<option value="'.$a['area_id'].'">'.$a['area_name'].'</option>';				
			}
			?>
                          
                          </select>
                        </div>
                      </div>


                      <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Site Image<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="gambar" type="file" required="required"/>
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