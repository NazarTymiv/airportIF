<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<header class="header travel_header">
    			 <div class="header__topblock">
					<div class="header__title">
						<h2 class="header__title-text"><a href="main.php">IVANO-FRANKIVSK AIRPORT</a></h2>
						<img src="img/logo.png" alt="logo" class="header__title-img">
					</div>
					<ul class="header__nav">
						<li class="header__nav-item"><a href="flight.php">Графік</a></li>
						<li class="header__nav-item"><a href="tickets.php">Квитки</a></li>
						<li class="header__nav-item"><a href="aboutus.php">Про нас</a></li>
						<li class="header__nav-item"><a href="tourism.php">Туризм</a></li>
						<li class="header__nav-item header__search"><a href="#"><img src="img/loop.png" alt="search"></a></li>
					</ul>
            	</div>
    		</header>
    		<div class="headline">
    			<h2 class="headline-title">
            	    ПРИЛІТ-<span>ВИЛІТ</span>
           	 	</h2>
           	 	<div class="flight_search">
           	 		<img src="img/loupe2.png">
           	 		<p>ПОШУК ПОЛЬОТІВ</p>
           	 	</div>
           		 <div class="line"></div>
    		</div>
    		<div class="flights">
				<table class="flights__table">
					<tr class="flights__table-tr">
						<th class="flights__table-th">РЕЙС</th>
						<th class="flights__table-th">ПЕРЕВІЗНИК</th>
						<th class="flights__table-th">ПУНКТ ПРИЗНАЧЕННЯ</th>
						<th class="flights__table-th">Приліт</th>
						<th class="flights__table-th">Виліт</th>
						<th class="flights__table-th">Літак</th>
					</tr>
					<?php
						$servername = "localhost:3306/airport";
						$username = "airport";
						$password = "Airport009";
					
						// Create connection
						$conn = mysqli_connect($servername, $username, $password);
					
						// Check connection
						if (!$conn) {
							die("Connection failed: " . mysqli_connect_error());
						}

						$result = $conn->query("SELECT * FROM airport.flights");

						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								echo 
								'<tr class="flights__table-tr">' .
									'<td class="flights__table-td">PS ' . $row["flight"] . "</td>" .
									'<td class="flights__table-td">' . $row["carrier"] . "</td>" .
									'<td class="flights__table-td">' . $row["destination"] . "</td>" .
									'<td class="flights__table-td">' . $row["arrival"] . "</td>" .
									'<td class="flights__table-td">' . $row["departure"] . "</td>" .
									'<td class="flights__table-td">' . $row["plane"] . "</td>" .
								'</tr>';
							}
						} else {
							echo "0 results";
						}
					?>
				</table>
			</div>
    		<div class="footer">
				<div class="footer__contact">
					<h2 class="footer__contact-title">
						Ivano-Frankivsk Airport
					</h2>
					<p class="footer__contact-numberphone">
						Довідкове бюро: +097-000-000
					</p>
					<div class="footer__nets">
						<a href="#"><img src="img/facebook.png" alt="facebook" class="footer__nets-item"></a>
						<a href="#"><img src="img/instagram.png" alt="instagram" class="footer__nets-item"></a>
						<a href="#"><img src="img/telegram.png" alt="telegram" class="footer__nets-item"></a>
					</div>
					<p class="footer__copyright">© 2021 Ivano-Frankivsk Airport</p>
				</div>
        	</div>	
		</div>
	</body>
</html>