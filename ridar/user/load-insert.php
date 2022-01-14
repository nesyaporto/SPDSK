<?php 
include 'koneksi.php';
$file_name = $_FILES['gambar']['name'];
$file_size = $_FILES['gambar']['size'];
$file_type = $_FILES['gambar']['type'];
if ($file_size < 2048000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
{
$image   = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
$id = $_POST['id'];
$name = $_POST['sitename'];
$owner = $_POST['nama_owner'];
$area = $_POST['nama_area'];
$tgl_current = date('Y-m-d');
$tgl_modified = date('Y-m-d');

$result = mysqli_query($db, "INSERT INTO site VALUES ('$id','$name', '$owner', '$area', '$image', '$tgl_current', '$tgl_modified' )");

if($result){
    echo "<script>alert('Berhasil Menambahkan Data Site');document.location='home_site.php'</script>";
  } else {
    echo("Gagal".mysqli_error($db));
 
} }

else {
  echo "<script>alert('Gagal Menyimpan Data Site , Format Gambar PNG / JPG dan Ukuran Gambar Tidak Lebih dari 1,95 MB');document.location='insert.php'</script>";
}
?>