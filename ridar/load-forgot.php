<?php
	include 'koneksi.php';
	if (isset($_POST['btnReset'])) 
	{
		$username = $_POST['username'];
		$cek = mysqli_query($db,"SELECT username FROM login WHERE username = '$username' ");
		if (mysqli_num_rows($cek) == 1 ) 
		{
			$password   = $_POST['pass1'];
			$repassword = $_POST['pass2'];
			if($password != $repassword)
			{
				?>
					<script>
						alert("Inputan password tidak sama");
						window.location.href = 'forgot.php';
					</script>
				<?php
			}else
			{
				$pwd = md5($password);
				$sql = mysqli_query($db,"UPDATE login SET password = '$pwd' WHERE username = '$username' ");
				if ($sql) 
				{
					?>
						<script>
							alert("Password telah di perbarui");
							window.location.href = 'index.php';
						</script>
					<?php
				}else
				{
					?>
						<script>
							alert("Password gagal diperbaharui");
							window.location.href = 'forgot.php';
						</script>
					<?php
				}
			}
		}else
		{
			?>
				<script>
					alert("Pastikan username yang anda masukan benar!");
					window.location.href = 'forgot.php';
				</script>
			<?php
		}
	}
?>