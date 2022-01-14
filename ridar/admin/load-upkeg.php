<?php 

include 'koneksi.php';

$file_name = $_FILES['imdata']['name'];
$file_size = $_FILES['imdata']['size'];
$file_type = $_FILES['imdata']['type'];
if ($file_size < 2048000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
{
$im   = addslashes(file_get_contents($_FILES['imdata']['tmp_name']));
$id = $_POST['id_keg'];
$name = $_POST['nama_keg'];
$prog = $_POST['progress'];
$ket = $_POST['ket'];
$se = $_POST['sebab'];
$imp = $_POST['impact'];
$so = $_POST['solusi'];
$tgl_current = $_POST['datestart'];
$dc = date('Y-m-d');
$tgl_modified = date('Y-m-d');
$umur =((abs(strtotime ($dc) - strtotime ($tgl_current)))/(60*60*24));

$result=mysqli_query($db, "UPDATE kegiatan SET nama_keg='$name' , foto_keg='$im', date_closed='$dc', 
progress='$prog', ket='$ket', umur_keg='$umur', sebab='$se', impact='$imp', solusi='$so', 
date_updated='$tgl_modified' WHERE id_keg='$id'");

if($result){
    echo "<script>alert('Berhasil Update Data Kegiatan');document.location='home_keg.php'</script>";
} else {
    echo("Gagal".mysqli_error($db));
 
} }

else {
  echo "<script>alert('Gagal Update Data Kegiatan , Format Gambar PNG / JPG dan Ukuran Gambar Tidak Lebih dari 1,95 MB');document.location='home_keg.php'</script>";
}
?>