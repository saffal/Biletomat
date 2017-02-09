<!DOCTYPE html>
<html>
	<head>
  		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<div id="container">
			<div class="logo"></div>
			<div class="navbar">
				<form action="wyniki.php" method="post">
					<select>				
  					<option value="from">Bydgoszcz</option>
  					<option value="from">Gdańsk</option>
  					<option value="from">Katowice</option>
  					<option value="from">Kraków</option>
  					<option value="from">Lublin</option>
  					<option value="from">Poznań</option>
  					<option value="from">Szczecin</option>
  					<option value="from">Warszawa</option>
  					<option value="from">Wrocław</option>
  					<option value="from">Łódź</option>
					</select>	
					<input type="text" name="search" placeholder="Miasto docelowe"> 
					<input type="date" name="bday">
					<input type="submit" name="szukaj">
				</form>
			</div>
			<div class="main">

			</div>
			<div class="footer"></div>

		</div>
	</body>
</html>