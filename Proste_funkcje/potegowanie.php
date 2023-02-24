<html>
	<head>
		<title>PROSTE DZIAŁANIA</title>
		<link rel="Stylesheet" type="text/css" href="style.css">
		<meta charset="utf-8">
	</head>
	<script type="text/javascript" src="proste_dzialania.js"></script>
	<body>
		<div id="kontener">
			<div id="baner">
				<a href="index.html"><img src="baner.jpg" alt="BANER" /></a>
			</div>
			<div id="menu">
				<p>Menu</p>
				<a href="proste_dzialania.html">- proste działania</a><br>
				<a iframe="tresc" href="potegowanie.php">- potęgowanie</a><br>
			</div>
			<div id="tresc">
				<h1>PROSTE DZIAŁANIA</h1>
				<form name='formularz' method='post'>
				
					Podaj podstawę potęgi:<input type='text' name='podstawa'/> <br>
					Podaj dodatni, całkowity wykładnik potęgi:<input type='text' name='wykladnik'/> <br>
					
					<br>
					
					<input type="submit" value="Potęgowanie" name="potegowanie"/>

				</form>
				
				
				<?php
                                        if(isset($_POST['potegowanie'])){
						@$pods = $_POST['podstawa'];
						@$wyk = $_POST['wykladnik'];
						if(!is_numeric($pods) ||  !is_numeric($wyk)){
							echo 'Wpisz wykładnik potęgi.';
						}
						else if($wyk >= 0){
							$potega = pow($pods,$wyk);
							echo 'Wynik działania wynosi ', $potega;
						}
						else{
							echo 'Wykładnik musi być dodatni';
						}
					}
				?>
			</div>
		</div>
	</body>
</html>