<?php 

include 'koneksi.php';

    $name = $_POST['nama'];  
    $sql = "insert into area values (area_id,'$name')";
    $res = $db->query($sql);

    if($db -> error){
        echo "<script>alert('GAGAL Menambahkan Technical Area Baru' .$db->error);document.location='insert_area.php'</script>";
    } else {
        $last_id = $db->insert_id;
        echo "<script>alert('BERHASIL Menambahkan Technical Area Baru');document.location='tabelarea.php'</script>";
    }
?>