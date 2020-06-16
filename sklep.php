<!doctype html>

<?php
	extract($_REQUEST);
	$host = 'localhost';
	$user = 'root';
	$pass = 'adam';      //uwaga hasło ustawione!
	$dbname = 'sklep';
	
	if (isset($dodaj)) {
		unset($dodaj);
		
		$link = mysqli_connect($host, $user, $pass, $dbname);
		$sql = "INSERT INTO towary (nazwa, cena) VALUES ('$nowanazwa', '$nowacena')";		
		$res = mysqli_query($link, $sql);
		if($res) echo "Rekord został dodany poprawnie";
		else echo "Błąd nie udało się dodać nowego rekordu";
		mysqli_close($link);
	}
	if (isset($usun)) {
		unset($usun);
		
		$link = mysqli_connect($host, $user, $pass, $dbname);
		$sql = "DELETE FROM towary WHERE nazwa='$kasuj'";
		$res = mysqli_query($link, $sql);
		mysqli_close($link);
	}
	if (isset($zmien)) {
		unset($zmien);
		$link = mysqli_connect($host, $user, $pass, $dbname);
		$sql = "UPDATE towary SET cena='$cena' WHERE nazwa='$zmiana'";
		$res = mysqli_query($link, $sql);
		mysqli_close($link);
	}
?>

<html>
	<head>
		<meta charset="utf-8" />
		<title>Laboratorium 5</title>
		<style>
			table.lista, table.lista th,table.lista td {
				border: 1px solid gray;
				border-collapse: collapse;
				text-align: right;
			}
		</style>
	</head>
	<body>
		<h1>Laboratorium 5</h1>
		<h2>sklep</h2>
		<hr />
		<h3>oferta:</h3>
		<table class="lista">
			<tr><th>nazwa</th><th>cena</th></tr>
			<?php
				$link = mysqli_connect($host, $user, $pass, $dbname);
				$sql = "SELECT nazwa, cena FROM towary ORDER BY nazwa";
				$res = mysqli_query($link, $sql);
				while ($rec = mysqli_fetch_assoc($res)) {
					$nazwa = $rec['nazwa'];
					$cena = $rec['cena'];
					echo "<tr><td>$nazwa</td><td>$cena</td></tr>\n";
				}
				mysqli_close($link);
			?>
		</table>
		<hr />
		<h3>dodaj towar:</h3>
		<form method="POST">
			<input type="hidden" name="dodaj" value="dodaj" />
			<table>
				<tr><td>towar:</td><td><input type="text" name="nowanazwa" /></td></tr>
				<tr><td>cena:</td><td><input type="text" name="nowacena" /></td></tr>
				<tr><td><input type="submit" value="dodaj" /></td></tr>
			</table>
		</form>
		
		<hr />
		<h3>usuń towar:</h3>
		<form method="POST">
			<input type="hidden" name="usun" value="usun" />			
			<select name = "kasuj">
			<?php
				$link = mysqli_connect($host, $user, $pass, $dbname);
				$sql = "SELECT nazwa FROM towary ORDER BY nazwa";
				$res = mysqli_query($link, $sql);
				while ($rec = mysqli_fetch_assoc($res)) {
					$nazwa = $rec['nazwa'];										
					echo"<option value='$nazwa'>$nazwa</option>";
				}
				mysqli_close($link);
			?>				
							
			</select>
			<input type="submit" value="usuń pozycje"/>
		</form>
		
		<hr />
		<h3>zmień cenę towaru:</h3>
		<form method="POST">
			<input type="hidden" name="zmien" value="zmien" />			
			<select name ="zmiana">
			<?php
				$link = mysqli_connect($host, $user, $pass, $dbname);
				$sql = "SELECT nazwa FROM towary ORDER BY nazwa";
				$res = mysqli_query($link, $sql);
				while ($rec = mysqli_fetch_assoc($res)) {
					$nazwa = $rec['nazwa'];										
					echo"<option value='$nazwa'>$nazwa</option>";
				}
				mysqli_close($link);
			?>				
							
			</select>
			<input type="text" name="cena" />
			<input type="submit" value="zamień "/>
		</form>
		<hr />
	</body>
</html>
