<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('p','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'Report Data Site Riau Daratan',0,1,'C');
$pdf->SetFont('Arial','B',12);

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'Jumlah Semua Site',1,0);
$pdf->Cell(40,6,'Jumlah Semua Site',1,0);


$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$sql    ="SELECT count(*) AS total FROM site";
$query   =mysqli_query($db,$sql);
$result =mysqli_fetch_array($query);
//echo "Jumlah data dengan fungsi MySQL count(): {$result['total']}";

    $pdf->Cell(20,6,$result['total'],1,0);
    $pdf->Cell(40,6,$result['total'],1,0);

$pdf->Output();
?>