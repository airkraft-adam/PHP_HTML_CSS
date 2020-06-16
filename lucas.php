
<?php
	$log="";
	extract($_REQUEST);
	if ((! isset($n)) | ($n<4) |($n>45)){ 
		$n=10;
		$log= "Podano nieprawidłową wartość, przyjmuję n=10";
		}
	$n = (int)$n;

	
	function lucasnumbers ($x){
		
		if ($x == 0) return 2;
		if ($x == 1) return 1;
		
		return lucasnumbers($x -1) + lucasnumbers($x-2);

	}
	
	$lucas = lucasnumbers($n);
?>


<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" type="text/css" />
		<title>Lucas</title>

	</head>
	<body>
	<div id=okno>
	<h1> Lab 4 - Liczby Lucasa </h1>
	<?php
	if ($log!="") echo $log;
	?>
	<p><?php print( "liczby Lucasa dla n=$n <br><br>") ?> </p>
	<table border="2" id="lucas">
	<tr>
	<td>n</td><td>wartość</td>
	</tr>
	<tr>
	</tr>
	<?php
	for ($i=1; $i<=$n;$i++)
		echo "<tr> <td> $i </td> <td>" . lucasnumbers($i) . "</td> </tr>";
	?>
	</table>
	<p>	<a href="lucas.html">Powrót do formularza</a></p>

	</div>
	</body>
</html>