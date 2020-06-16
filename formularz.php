<?php
	$err="";
	extract($_REQUEST);
	
	if ($plec=="m") {
		$plec="Mężczyzna";
		}
	else{
		$plec="Kobieta";
	}
	
	$pora="";
	if (isset($pora1) && ($pora1=="w")){
		$pora=$pora."wiosna ";
	}
	if (isset($pora2) && ($pora2=="l")){
		$pora=$pora."lato ";
	}
	if (isset($pora3) && ($pora3=="j")){
		$pora=$pora."jesień ";
	}
	if (isset($pora4) && ($pora4=="z")){
		$pora=$pora."zima";
	}
	$text=str_replace("\n", "<br>", $text);
	
	switch ($dzien) {
    case "pon":
		$dzien="po9niedziałek";
        break;
    case "wt":
        $dzien="Wtorek";
        break;
    case "sr":
        $dzien="Środa";
        break;
    case "czw":
        $dzien="Czwartek";
        break;
    case "pt":
        $dzien="Piątek";
        break;
    case "sob":
        $dzien="Sobota";
        break;
    case "nie":
        $dzien="Niedziela";
        break;

}
?>

<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" type="text/css" />
		<title>Dane klienta</title>

	</head>
	<body>


<?php	
	echo "
	<table border=\"2\">
		<tr>
			<td> Imię </td>
			<td> $imie </td>
		</tr>
		
		<tr>
			<td> Nazwisko </td>
			<td> $nazwisko </td>
		</tr>
		<tr>
			<td> Płeć </td>
			<td> $plec </td>
		</tr>
		<tr>
			<td> Data urodzenia </td>
			<td> $urodziny </td>
		</tr>
		<tr>
			<td> E-mail </td>
			<td> $email </td>
		</tr>
		<tr>
			<td> Hasło </td>
			<td> $haslo </td>
		</tr>
		<tr>
			<td> Ulubiony kolor </td>
			<td> $kolor </td>
		</tr>
		<tr>
			<td> Ulubiona liczba (1 ~ 9)</td>
			<td> $liczba</td>
		</tr>
		<tr>
			<td> Ulubiona pora roku </td>
			<td>
				$pora 
			</td>
		</tr>
		<tr>
			<td> Poziom zadowolenia z życia (0 ~ 100%) </td>
			<td> $procent % </td>
		</tr>
		<tr>
			<td> Dzień kontaktu z klientem </td>
			<td> $dzien </td>
		</tr>
		<tr>
			<td> Dodatkowe informacje o kliencie </td>
			<td>$text</td>
		</tr>
	</table>"
	?>
	</body>
</html>