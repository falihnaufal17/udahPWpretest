<!DOCTYPE html>
<html>
<head>
	<title>Dec to bin</title>
</head>
<body>
	<form action="" method="post" accept-charset="utf-8">
		<label>Angka Desimal: </label>
		<input type="text" name="dec" value="" placeholder="Masukan angka desimal...">
		<br>
		<input type="submit" name="konversikan" value="Konversi!">
	</form>
	<?php 
		if(isset($_POST['konversikan'])){
			$desimal = $_POST['dec'];
			$original = $_POST['dec'];
			$biner = '';

			if(preg_match('/[^0-9]/', $desimal)){
				die("Masukan harus berisi angka tidak boleh karakter atau huruf");
			}else{
				while ($desimal > 0) {
				    if($desimal%2 == 0)
				    {
				    	$biner .= 0;
				    	$desimal /= 2;
				    }else{
				    	$biner .= 1;
				    	$desimal = ($desimal/2)-0.5;
				    }
				}
				$hasil = strrev($biner);

				echo "<p>Hasil konversi adalah $hasil</p>";
			}	
		}

	 ?>
</body>
</html>