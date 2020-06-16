<?php
	$err="";
	extract($_REQUEST);
	if ((! isset($n)) | ($n<1) |($n>1000000000)){ 
		$n=10;
		$err= "Podano nieprawidłową wartość, podaj liczbę naturalną w zakresie 1-1.000.000.000";
		}
	$n = (int)$n;

	
	function liczby ($x){
		
		for ($i=2;$i<$x;$i++){
			
			if ($x%$i==0){
			return $i;
			break;
			}
		}
		
		return 0;

	}
	
	$check = liczby($n);
?>


<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" type="text/css" />
		<title>liczby</title>

	</head>
	<body>
	<h1>Lab 4 - Liczby pierwsze</h1>
	<?php
	if ($err!="") {echo $err;}
	else{
		if ($check==0){
		echo "$n jest liczbą pierwszą";
		}
		else{
		echo "$n jest liczbą złożoną. Pierwszy dzielnik to: $check";
		}
		
	}
	?>
	<p>	<a href="liczbyPierwsze.html">Powrót do formularza</a></p>

	</body>

</html>