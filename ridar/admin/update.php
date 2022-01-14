        
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
                  <h2>Update Data Site</h2>
                 
                  <div class="clearfix"></div>
                </div>
             
               

                    <form action="load-update.php" method="post" enctype="multipart/form-data">
                    <?php
                    include "koneksi.php";
                    $id = $_GET['id'];
                    $query = mysqli_query($db, " select
                    site.site_id,
                    site.site_name,
                    site.owner_id,
                    owner.owner_name,
                    site.area_id,
                    area.area_name,
                    site.image,
                    site.current,
                    site.modified
                    from site
                    INNER JOIN owner ON (site.owner_id=owner.owner_id)
                    INNER JOIN area ON (site.area_id=area.area_id) 
                    WHERE site_id='$id' ");

                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                     <div class="field item form-group">
                   
                   <label class="col-form-label col-md-3 col-sm-3  label-align">Site ID<span
                       class="required">*</span></label>
                   <div class="col-md-6 col-sm-6">
                  <input type="text" name="siteid" value="<?php echo $data['site_id'] ?>" class="form-control" disabled  
                        required="required"  /></div>
                 </div>

                    <div class="field item form-group">
                  
                     <input type="hidden" name="siteid" value="<?php echo $data['site_id'] ?>"/>
                      
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Site Name<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                      <input type="text" name="sitename" value="<?php echo $data['site_name'] ?>" class="form-control"   
                        required="required"  /></div>
                  </div>

            
            
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Owner Tower Name<span
                          class="required">*</span></label>
                         
                      <div class="col-md-6 col-sm-6">
                      
                        <select name="editid_owner" class="select2_single form-control">
                        <option>[Pilih Owner Tower]</option>
      <?php
       $row = mysqli_query($db,"select * from owner order by owner_name asc");
      while($a = mysqli_fetch_assoc($row)) {
        if ($a['owner_name']==$a['owner_id']) {
        $select="selected";
       } else { 
         $select="";
      }
				echo '<option value="'.$a['owner_id'].'">'.$a['owner_name'].'</option>';				
			}
       ?>      
     </select>
     Pilihan Sebelumnya : <?php echo $data['owner_name'] ?>
                 </div></div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Technical Area Name<span
                          class="required">*</span></label>
                          <div class="col-md-6 col-sm-6">
                          <select name="editid_area" class="select2_single form-control">
                          <option>[Pilih Technical Area]</option>
      <?php
       $row = mysqli_query($db,"select * from area order by area_name asc");
      
      while($a = mysqli_fetch_assoc($row)) {
        if ($a['area_name']==$a['area_id']) {
        $select="selected";
       } else { 
         $select="";
      }
				echo '<option value="'.$a['area_id'].'">'.$a['area_name'].'</option>';				
			}
       ?>      
     </select>
     Pilihan Sebelumnya : <?php echo $data['area_name'] ?>
     </div>
                 </div>
                    
                 <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Site Image<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                      <input type="file" name="imdata" class="form-control"   
                        required="required"  />
                        </div></div>
                    
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