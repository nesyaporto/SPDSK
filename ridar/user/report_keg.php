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
                    <h2>Report Kegiatan</h2>
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
              <span class="count_top"><i class="fa fa-gavel"></i> Total Kegiatan</span>
              <div class="count"><?php
                                $sql    ="SELECT count(*) AS total FROM kegiatan";
                                $query   =mysqli_query($db,$sql);
                                $result =mysqli_fetch_array($query);
                              echo $result['total'];
                            ?></div>
                            <br>
                            <?php 
                            setlocale(LC_ALL, 'id-ID', 'id_ID');
                            $now=date('d-m-Y',strtotime('now'));
                            echo "Hari ini " . strftime("%A, %d %B %Y", strtotime($now)); ?>
              </div>
        </div>
  </div>
 


  
                          <div class="row" >
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                         
                       <table  class="table table-striped table-bordered" style="width:100%">
                         <thead>
                           <tr>
                           <h2>Kegiatan Selesai</h2>
                           
                             <th>Nama Kegiatan</th>
                             <th>Date Start</th>
                             <th>Date Closed</th>
                             <th>Progress</th>
                             <th>Keterangan</th>
                           </tr>
                           
                         </thead>
   
   
                         <tbody>
                         <?php
                          $now=date('Y-m-d',strtotime('now'));
                         
                         $oke = mysqli_query($db,"SELECT *  FROM kegiatan WHERE date_closed < '$now'");
                         
                         while($dt = mysqli_fetch_assoc($oke)){
                         ?>       
              <tr>
  
               <td><?php echo $dt['nama_keg']; ?></td>
               <td><?php echo $dt['date_start']; ?></td>
               <td><?php echo $dt['date_closed']; ?></td>
               <td><?php echo $dt['progress']; ?></td>
               <td><?php echo $dt['ket']; ?></td>
               
               <?php } ?>

             
                         </tbody>
                       </table>
                       
                     </div>
                     </div>
                 </div>
               </div>
                   
            

                   <table  class="table table-striped table-bordered" style="width:100%">
                         <thead>
                           <tr>
                           <h2>Kegiatan On Progress</h2>
                           
                             <th>Nama Kegiatan</th>
                             <th>Date Start</th>
                             <th>Date Closed</th>
                             <th>Progress</th>
                             <th>Keterangan</th>
                           </tr>
                           
                         </thead>
   
   
                         <tbody>
                         <?php
                          $now=date('Y-m-d',strtotime('now'));
                         
                          $oke = mysqli_query($db,"SELECT *  FROM kegiatan WHERE date_closed >= '$now'");
                         while($dt = mysqli_fetch_assoc($oke)){
                         ?>       
              <tr>
  
               <td><?php echo $dt['nama_keg']; ?></td>
               <td><?php echo $dt['date_start']; ?></td>
               <td><?php echo $dt['date_closed']; ?></td>
               <td><?php echo $dt['progress']; ?></td>
               <td><?php echo $dt['ket']; ?></td>
               
               <?php } ?>
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
                </div>

        <!-- /page content -->

        <!-- footer content -->
        <?php
          include('footer.php')
        ?>

  </body>
</html>