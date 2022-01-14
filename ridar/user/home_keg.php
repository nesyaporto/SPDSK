<?php
session_start();
 
if($_SESSION['level']==""){
  header("location:index.php?pesan=gagal");
}

include 'koneksi.php';
if(isset($_GET['hapus'])){
    $id = $_GET['hapus'];
  $del=mysqli_query($db, "delete from kegiatan where id_keg='$id'");
  }
?>
     
         <!-- sidebar menu -->
         <?php
          include('head_sidebar.php')
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
                    <h2>Tabel Data Kegiatan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"> Collapse</i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>ID Kegiatan</th>
                          <th>Nama Kegiatan</th>
                          <th>Tanggal Input</th>
                          <th>Tanggal Update</th>
                          <th>Tanggal Closed</th>
                          <th>Progress</th>
                          <th>Keterangan</th>
                          <th>Umur Kegiatan</th>
                          <th>Image</th>
                          <th>Sebab</th>
                          <th>Impact</th>
                          <th>Solusi</th>
                          <th>Menu</th>        
                        </tr>      
                      </thead>
                      <tbody>
                      
	  
                      <?php 
    $row = mysqli_query($db,"select
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
from kegiatan");


$no = 1;
		while($a = mysqli_fetch_array($row)){
			?>
			<tr>
      <?php setlocale(LC_ALL, 'id-ID', 'id_ID'); ?>
				<td><?php echo $a['id_keg']; ?></td>
				<td><?php echo $a['nama_keg']; ?></td>
        <td><?php echo strftime("%A, %d %B %Y", strtotime($a['date_start'])); ?></td>
        <td><?php echo strftime("%A, %d %B %Y", strtotime($a['date_updated'])); ?></td>
        <td><?php echo strftime("%A, %d %B %Y", strtotime($a['date_closed'])); ?></td>
     		<td><?php echo $a['progress']; ?></td>
        <td><?php echo $a['ket']; ?></td>
        <td><?php echo $a['umur_keg'] . ' Hari'; ?></td>
        <td><img src="imview_keg.php?id_keg=<?php echo $a['id_keg']; ?>" width="100" height="100"/></td>
				<td><?php echo $a['sebab']; ?></td>
				<td><?php echo $a['impact']; ?></td>
        <td><?php echo $a['solusi']; ?></td>
        <td>
        
      <button class ="btn btn-warning"> <a href="update_keg.php?id_keg=<?php echo $a['id_keg']; ?>" ><i class="fa fa-edit"></i></a></button>
     
      </td>
     
  
			<?php 
		}
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