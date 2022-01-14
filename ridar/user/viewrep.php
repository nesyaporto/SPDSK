<?php  session_start();
        
          // cek apakah yang mengakses halaman ini sudah login
          if($_SESSION['level']==""){
            header("location:index.php?pesan=gagal");
          }?>
<?php

include 'koneksi.php';

?>
         
         <!-- sidebar menu -->
         <?php
          include('head_sidebar.php');
          
          ?>
          


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabel Data Site Per Area</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"> Collapse</i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                    
                  </div>

                  <div class="x_content">

                      <div class="row" style="display: inline-block;" >
                      
          <div class="tile_count">
            <div class="col-md-12 col-sm-12  tile_stats_count">
              <span class="count_top"><i class="fa fa-globe"></i> Total Site</span>
              
              <div class="count"><?php
                                $sql    ="SELECT count(*) AS total FROM site";
                                $query   =mysqli_query($db,$sql);
                                $result =mysqli_fetch_array($query);
                                echo $result['total'];
                            ?>
                           
                            </div>
                            
            </div>

        </div>
        
  </div>

  <div class="row" >
  <?php include('chart.php');?>
  <br> <br> <br>  <br> <br> <br>  <br> <br> <br>  <br> <br> <br>
  
                          <div class="col-sm-12">
                          
                            <div class="card-box table-responsive">
                            
                            

                    <table  class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Technical Area ID</th>
                          <th>Technical Area Name</th>
                          <th>Jumlah Site</th>
                        </tr>
                      </thead>
                      <tbody>
                      	  
                      <?php 
  
  $query = "SELECT area_id, area_name, count(site_id) as hitung  FROM site LEFT JOIN area USING(area_id) GROUP BY area_id";
  $dewan1 = $db->prepare($query);
   $dewan1->execute();
   $res1 = $dewan1->get_result();
   if ($res1->num_rows > 0) {
       while ($row = $res1->fetch_assoc()) {
           $area_id = $row['area_id'];
           $area_name = $row['area_name'];
           $site_id = $row['hitung'];
   ?>

			<tr>
            <td><?php echo $area_id; ?></td>
            <td><?php echo $area_name; ?></td>
            <td><?php echo $site_id; ?></td>
	
			<?php 
		} }
    ?>
                      </tbody>
                    </table>
                  </div>
                  </div>
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