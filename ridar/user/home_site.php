<?php
session_start();
 
if($_SESSION['level']==""){
  header("location:index.php?pesan=gagal");
}

include 'koneksi.php';
if(isset($_GET['hapus'])){
    $id = $_GET['hapus'];
  $del=mysqli_query($db, "delete from site where site_id='$id'");
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
                    <h2>Tabel Data Site</h2>
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
                          <th>No</th>
                          <th>Site ID</th>
                          <th>Site Name</th>
                          <th>Owner Tower Name</th>
                          <th>Technical Area Name</th>
                          <th>Image</th>
                          <th>Tanggal Input</th>
                          <th>Tanggal Update</th>
                          <th>Menu</th>
                        </tr>
                      </thead>
                     <tbody>

                      <?php 
    $row = mysqli_query($db,"select
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
INNER JOIN area ON (site.area_id=area.area_id) order by site_id asc");

$no = 1;
		while($a = mysqli_fetch_array($row)){
			?>
			<tr>
      <?php setlocale(LC_ALL, 'id-ID', 'id_ID'); ?>
				<td><?php echo $no++; ?></td>
				<td><?php echo $a['site_id']; ?></td>
				<td><?php echo $a['site_name']; ?></td>
				<td><?php echo $a['owner_name']; ?></td>
        <td><?php echo $a['area_name']; ?></td>
        <td><img src="imview.php?site_id=<?php echo $a['site_id']; ?>" width="100" height="100"/></td>
        <td><?php echo strftime("%A, %d %B %Y", strtotime($a['current'])); ?></td>
        <td><?php echo strftime("%A, %d %B %Y", strtotime($a['modified'])); ?></td>
        <td>
        
      <button class ="btn btn-warning"> <a href="update.php?id=<?php echo $a['site_id']; ?>" ><i class="fa fa-edit"></i></a></button>
     
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