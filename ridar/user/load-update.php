<?php 

include 'koneksi.php';
$file_name = $_FILES['imdata']['name'];
$file_size = $_FILES['imdata']['size'];
$file_type = $_FILES['imdata']['type'];

if ($file_size < 2048000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
{
$im   = addslashes(file_get_contents($_FILES['imdata']['tmp_name']));
$id = $_POST['siteid'];
$name = $_POST['sitename'];
$owner = $_POST['editid_owner'];
$area = $_POST['editid_area'];
$tgl_modified = date('Y-m-d H:i:s');

$result=mysqli_query($db, "UPDATE site SET site_name='$name', owner_id='$owner', area_id='$area', modified='$tgl_modified', image='$im' WHERE site_id='$id'");

if($result){
  echo "<script>alert('Berhasil Update Data Site');document.location='home_site.php'</script>";
} else {
  echo("Gagal".mysqli_error($db));

} }

else {
echo "<script>alert('Gagal Update Data Site, Format Gambar PNG / JPG dan Ukuran Gambar Tidak Lebih dari 1,95 MB');document.location='home_site.php'</script>";
}
?>