<?php 
	
	// function palindrome($kata){
	// 	$reverse = strrev($kata);
	// 	$strToArr = str_split($reverse);

	// 	$palin = '';

	// 	foreach ($strToArr as $val) {
	// 		$palin .= $val;
	// 	}

	// 	print($palin."<br>");

	// }

	// print palindrome('banananana');
	// print palindrome('nana');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Advanced Palindrome</title>
 </head>
 <body>
 	<h1>Advanced Palindrome</h1>
 	<form action="" method="post">
 		<label>Masukan Kata</label><br>
 		<input type="text" name="kata" value="" placeholder="Masukan Kata...">
 		<br>
 		<input type="submit" name="cari" value="Submit">
 	</form>

 	<?php 

 		if(isset($_POST['cari'])){
 			$kata = $_POST['kata'];

 			//change str to lowercase
 			$kata = strtolower($kata);

 			//calculate string length
 			$katalength = strlen($kata);
 			echo 'Kata/frasa= '.$kata. '<br>';
 			echo $katalength. '<br>';

 			//reverse string
 			$reverse = strrev($kata);

 			//cek palindrome
 			if($kata == $reverse){
 				echo 'Palindrome';
 			}else{
 				echo 'Bukan Palindrome';
 			}
 		}



 	 ?>
 </body>
 </html>