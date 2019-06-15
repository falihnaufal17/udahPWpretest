<h1>Intermediate Data Sorting</h1>
<?php 



	$bilangan = [6,22,34,15,2,13,26,57,42,32];

	function lowToHigh()
	{
		$bilangan = [6,22,34,15,2,13,26,57,42,32];
		sort($bilangan);

		foreach ($bilangan as $val) {
			echo $val. ', ';
		}
	}

	function highToLow()
	{
		$bilangan = [6,22,34,15,2,13,26,57,42,32];
		rsort($bilangan);
		foreach ($bilangan as $val) {
			echo $val. ', ';
		}
	}

	echo 'Data Terkecil: ' .min($bilangan). '<br>';
	echo 'Data Terbesar: ' .max($bilangan). '<br>';
	echo 'Ascending Sort: ';echo lowToHigh(). '<br>';
	echo 'Descending Sort: ';echo highToLow(). '<br>';





 ?>