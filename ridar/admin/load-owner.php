<?php 

include 'koneksi.php';
    $name = $_POST['namaowner'];  
    $sql = "insert into owner values (owner_id,'$name')";
    $res = $db->query($sql);

    if($db -> error){
        echo "<script>alert('GAGAL Menambahkan Owner Tower Baru' .$db->error);document.location='insert_owner.php'</script>";
    } else {
        $last_id = $db->insert_id;
        echo "<script>alert('BERHASIL Menambahkan Owner Tower Baru');document.location='tabelowner.php'</script>";
    }
?>