<?php
include('koneksi.php');
if(isset($_GET['site_id'])) 
{
    $query = mysqli_query($db,"select image from site where site_id='".$_GET['site_id']."'");
    $row = mysqli_fetch_array($query);
   
    echo $row["image"];
}
else
{
    header('location:home_site.php');
}
?>