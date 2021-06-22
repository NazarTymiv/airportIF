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
                <div class="tickets__form">
                    <div class="tickets__form-item">
                        <label for="passengers" class="tickets__form-label">Звідки</label>
                        <input type="text" id="where" class="tickets__form-input" value="ІВАНО-ФРАНКІВСЬК (IF UA)">
                    </div>
                    <div class="tickets__form-item">
                        <label for="passengers" class="tickets__form-label">Куди</label>
                        <input type="text" id="where" class="tickets__form-input" value="ХУРГАДА (Egypt Cairo)">
                    </div>
                    <div class="tickets__form-item">
                        <label for="passengers" class="tickets__form-label">Дата відправлення</label>
                        <input type="date" id="dateOfDeparture" class="tickets__form-input stickets__form-dated">
                    </div>
                    <div class="tickets__form-item">
                        <label for="passengers" class="tickets__form-label">Дата прибуття</label>
                        <input type="date" id="dateOfArrival" class="tickets__form-input stickets__form-datea">
                    </div>
                    <div class="tickets__form-item">
                        <label for="passengers" class="tickets__form-label">Пасажири</label>
                        <input type="text" id="passengers" class="tickets__form-input" value="1 пас. (економ)">
                    </div>
                    <div class="tickets__form-button">
                        <p class="tickets__button-part">БРОНЮВАТИ</p>
                    </div>
                </div>
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