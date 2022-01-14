<?php
include('koneksi.php');
if(isset($_GET['id_keg'])) 
{
    $query = mysqli_query($db,"select foto_keg from kegiatan where id_keg='".$_GET['id_keg']."'");
    $row = mysqli_fetch_array($query);
   
    echo $row["foto_keg"];
}
else
{
    header('location:home_keg.php');
}
?>