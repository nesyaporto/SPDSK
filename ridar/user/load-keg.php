<?php 
include 'koneksi.php';
$ekstensi_diperbolehkan = array('png','png');
$file_name = $_FILES['gambar']['name'];
$file_size = $_FILES['gambar']['size'];
$file_type = $_FILES['gambar']['type'];
if ($file_size < 2048000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
{
$image   = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
$id = $_POST['id_keg'];
$name = $_POST['nama_keg'];
$prog = $_POST['progress'];
$ket = $_POST['ket'];
$se = $_POST['sebab'];
$im = $_POST['impact'];
$so = $_POST['solusi'];
$tgl_current = date('Y-m-d');
$dc = date('Y-m-d');
$tgl_modified = date('Y-m-d');
$umur =((abs(strtotime ($dc) - strtotime ($tgl_current)))/(60*60*24));

$result = mysqli_query($db, "INSERT INTO kegiatan VALUES 
('$id','$name', '$image', '$tgl_current','$tgl_modified', '$dc', '$prog', '$ket','$umur','$se','$im','$so')");

if($result){
    echo "<script>alert('Berhasil Menyimpan Data Kegiatan');document.location='home_keg.php'</script>";
} else {
    echo("Gagal".mysqli_error($db));
 
} }

else {
  echo "<script>alert('Gagal Menyimpan Data Kegiatan , Format Gambar PNG / JPG dan Ukuran Gambar Tidak Lebih dari 1,95 MB');document.location='home_keg.php'</script>";
}
?>