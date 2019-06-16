<?php 
	$tahun = 1;
	$tinggiAwal = 200;
	function musimSemi($tahun, $tinggiAwal)
	{
		$original = $tinggiAwal;
		for ($i = 0; $i < $tahun; $i++) {
			
			if($tahun > 0){
				$tinggiAkhir = $tinggiAwal *= 2;
				print("Tahun: " .$tahun. " Tinggi Awal: " .$original. " Tinggi Akhir: " .$tinggiAkhir. " Pada musim semi");
			}	
		}
	}

	function musimGugur($tahun, $tinggiAwal)
	{
		$original = $tinggiAwal;
		for ($i = 0; $i < $tahun; $i++) {
			
			if($tahun > 0){
				$tinggiAkhir = $tinggiAwal += 1;
				print("Tahun: " .$tahun. " Tinggi Awal: " .$original. " Tinggi Akhir: " .$tinggiAkhir. " Pada musim gugur");
			}
		}
	}

	echo musimSemi($tahun, $tinggiAwal);
	echo '<br>';
	echo musimGugur($tahun, $tinggiAwal);

 ?>
