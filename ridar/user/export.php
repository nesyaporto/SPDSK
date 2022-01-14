<!DOCTYPE html>
<html>
<head>
	<title>Download Data dalam Excel</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>

	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Site Ridar.xls");
	?>

	<center>
		<h3>Data Site Riau Daratan</h3>
		<h4>Updated</h4>
		<?php 
echo date('l, d-m-Y H:i:s');
?>
	</center>

	<table border="1">
		<tr>
			<th>No</th>
			<th>Site ID</th>
			<th>Site Name</th>
			<th>Owner Tower Name</th>
            <th>Technical Area Name</th>
		</tr>
		<?php 
		$koneksi = mysqli_connect("localhost","root","","kp");
		$row = mysqli_query($koneksi,"select
		site.site_id,
		site.site_name,
		site.owner_id,
		owner.owner_name,
		site.area_id,
		area.area_name
		from
		site
		INNER JOIN owner ON (site.owner_id=owner.owner_id)
		INNER JOIN area ON (site.area_id=area.area_id) order by site_id asc");
		
		$no = 1;
		while($d = mysqli_fetch_array($row)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['site_id']; ?></td>
			<td><?php echo $d['site_name']; ?></td>
			<td><?php echo $d['owner_name']; ?></td>
            <td><?php echo $d['area_name']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>