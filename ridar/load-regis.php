<?php 
include 'koneksi.php';
$n = $_POST['name'];
$u = $_POST['user'];
$p = $_POST['pass'];
$md5=md5($p); 
$l = $_POST['level'];


$result = mysqli_query($db, "INSERT INTO login VALUES ('id','$n', '$u', '$md5', '$l')");

if($result){
    echo "<script>alert('Berhasil Menambahkan User');document.location='index.php'</script>";
}else {
   echo "<script>alert('Gagal Menambahkan User');document.location='register.php'</script>";
}


?>