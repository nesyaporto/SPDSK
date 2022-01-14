<?php  session_start();
        
         
          if($_SESSION['level']==""){
            header("location:index.php?pesan=gagal");
          }?>
        <?php
        include("koneksi.php");
        ?>
  
         <!-- sidebar menu -->
         <?php
          include('head_sidebar.php')
          ?>
      
      <!--page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
                     </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Input Data Technical Area</h2>
                 
                  <div class="clearfix"></div>
                </div>
               
                    <form action="load-area.php" method="post">
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Technical Area ID<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="id" 
                          type="text" required="required" disabled/></div>
                   
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Technical Area Name<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="nama" 
                          type="text" required="required"/></div>
                    </div>
                   

                    <div class="ln_solid" align="center">
                      <div class="form-group">
                        <div class="col-md-6 offset-md-3">
                        <button type='reset' class="btn btn-success">Reset</button>
                    <button type='submit' class="btn btn-primary">Submit</button>
                  
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