<?php  session_start();
        
          // cek apakah yang mengakses halaman ini sudah login
          if($_SESSION['level']==""){
            header("location:index.php?pesan=gagal");
          }?>
<?php

include 'koneksi.php';
if(isset($_GET['delowner'])){
    $id = $_GET['delowner'];
  $del=mysqli_query($db, "delete from owner where owner_id='$id'");
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
                    <h2>Tabel Owner Tower</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    <li> <a class="btn" style="color:blue" href="insert_owner.php">Tambah Data</a></li>
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
                         
                          <th>Owner Tower ID</th>
                          <th>Owner Tower Name</th>
                        
                          <th>Menu</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php 
    $row = mysqli_query($db,"select * from owner");

    $no = 1;
		while($a = mysqli_fetch_array($row)){
			?>
			<tr>
				<td><?php echo $a['owner_id']; ?></td>
				<td><?php echo $a['owner_name']; ?></td>
				<td>
        <button class="btn btn-warning"><a href="tabelowner.php?delowner=<?=$a['owner_id']; ?>"onclick="return confirm('Anda yakin akan menghapus tower <?php echo $a['owner_name']; ?> ?')"><i class="fa fa-trash"></i></a></button>

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

        <!-- /page content -->

        <!-- footer content -->
        <?php
          include('footer.php')
        ?>

  </body>
</html>