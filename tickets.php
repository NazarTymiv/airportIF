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
                    	<img src="img/logo_2.png" alt="logo" class="header__title-img">
                	</div>

                	<ul class="header__nav">
                   	 	<li class="header__nav-item travel__nav-item"><a href="flight.php">Графік</a></li>
                    	<li class="header__nav-item travel__nav-item"><a href="tickets.php">Квитки</a></li>
                    	<li class="header__nav-item travel__nav-item"><a href="aboutus.php">Про нас</a></li>
                    	<li class="header__nav-item travel__nav-item"><a href="tourism.php">Туризм</a></li>
                    	<li class="header__nav-item header__search"><a href="#"><img src="img/loupe2.png" alt="search"></a></li>
                	</ul>
            	</div>
    		</header>
    		<div class="headline">
    			<h2 class="headline-title">
            	    БРОНЮВАННЯ<span><br>КВИТКІВ</span>
           	 	</h2>
           		<div class="line"></div>
    		</div>
            <div class="tickets">
                <div class="tickets__title">
                    <span class="tickets__title-part">
                        РЕЙСИ З ІВАНО-ФРАНКІВСЬКА
                    </span>
                </div>
                <form action="index.php" class="tickets__form" method="post">
                    <div class="tickets__form-item">
                        <label for="whereon" class="tickets__form-label">Звідки</label>
						<select name="whereon" id="whereon" class="tickets__form-select">
							<option value="Ivano-Frankivsk">Ivano-Frankivsk</option>
						</select>
                    </div>
                    <div class="tickets__form-item">
                        <label for="whereout" class="tickets__form-label">Куди</label>
						<select name="whereout" id="whereout" class="tickets__form-select">
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

								$result = $conn->query("SELECT distinct destination FROM airport.flights");

								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) {
										echo '<option value="' . $row["destination"] . '">' . $row["destination"] . '</option>';
									}
								} else {
									echo "0 results";
								}
							?>
						</select>
                    </div>
                    <div class="tickets__form-item">
                        <label for="dateOfDeparture" class="tickets__form-label">Дата відправлення</label>
                        <input type="text" id="dateOfDeparture" class="tickets__form-input stickets__form-dated" name="dateOfDeparture">
                    </div>
                    <div class="tickets__form-item">
                        <label for="dateOfArrival" class="tickets__form-label">Дата прибуття</label>
                        <input type="text" id="dateOfArrival" class="tickets__form-input stickets__form-datea" name="dateOfArrival">
                    </div>
					<div class="tickets__form-choose">
                        <label for="adults" class="tickets__form-item-text">Дорослі</label>
						<input type="number" id="adults" class="tickets__form-number" name="adults" min="0" max="99" value="0">
                    </div>
					<div class="tickets__form-choose">
                        <label for="children" class="tickets__form-item-text">Діти</label>
						<input type="number" id="children" class="tickets__form-number" name="children" min="0" max="99" value="0">
                    </div>
					<input type="submit" class="tickets__form-button tickets__button-part" value="БРОНЮВАТИ">
				</form>
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