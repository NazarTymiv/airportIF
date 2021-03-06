<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ivano-Frankivsk Airport - Головна</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="header main__header">
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
            <div class="header__banner mian__header-banner">
                <div class="banner__weather">
                    <img src="img/sun__sky.png" alt="sun__sky" class="banner__weather-img">
                    <div class="weather__info">
                        <p class="weather__info-text">
                            <span>19°C - 66°F</span>
                            <span>ХМАРНО</span>
                        </p>
                    </div>
                </div>
                <h2 class="header__banner-title">
                    ПОЛЬОТИ<br /><span>РОБИТИ ЛЕГКО</span>
                </h2>
                <div class="banner__schedule">
                    <div class="banner__schedule-line"></div>
                    <div class="banner__buttons">
                        <div class="banner__button banner__buttons-arrival banner__button-active">
                            <p class="banner__buttons-text">ПРИБУТТЯ</p>
                            <img src="img/right-down.png" alt="arrow-bottom-right" class="banner__buttons-img">
                        </div>
                        <div class="banner__button banner__schedule-departure">
                            <p class="banner__buttons-text">ВІДПРАВЛЕННЯ</p>
                            <img src="img/right-down.png" style="transform: rotate(-90deg);" alt="arrow-top-right"
                                class="banner__buttons-img">
                        </div>
                    </div>
                    <div class="banner__search">
                        <img src="img/loop.png" alt="loop" class="banner__search-img">
                        <input type="text" class="banner__search-input" placeholder="ПОШУК ПОЛЬОТІВ">
                    </div>
                </div>
            </div>
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

                    $result = $conn->query("SELECT * FROM airport.flights limit 5");

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
            <a class="flights__button" href="flight.php">
                <p class="flights__button-text">Всі рейси</p>
                <img src="img/arrow__right.png" alt="arrow__right" class="flights__button-img">
            </a>
        </div>
        <div class="searchtickets">
            <div class="searchtickets__body">
                <h2 class="searchtickets__title">ПОШУК КВИТКІВ</h2>
                <p class="searchtickets__subtitle">Тільки найнижчі ціни на авіактивки</p>
                <div class="searchtickets__form">
                    <div class="searchtickets__block">
                        <label for="whereon" class="searchtickets__label">Звідки</label>
                        <select id="whereon" class="searchtickets-select">
							<option value="Ivano-Frankivsk">Ivano-Frankivsk</option>
						</select>
                    </div>
                    <div class="searchtickets__block">
                        <label for="passengers" class="searchtickets__label">Куди</label>
                        <select id="whereon" class="searchtickets-select">
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
                    <div class="searchtickets__dates">
                        <div class="searchtickets__block">
                            <label for="passengers" class="searchtickets__label">Дата відправлення</label>
                            <input type="date" id="dateOfDeparture" class="searchtickets__input searchtickets__dateOfDeparture">
                        </div>
                        <div class="searchtickets__block">
                            <label for="passengers" class="searchtickets__label">Дата прибуття</label>
                            <input type="date" id="dateOfArrival" class="searchtickets__input searchtickets__dateOfArrival">
                        </div>
                    </div>
                    <div class="searchtickets__block">
                        <label for="passengers" class="searchtickets__label">Пасажири</label>
                        <input type="number" value="0" max="99" min="0" id="passengers" class="searchtickets__input" value="1 пас. (економ)">
                    </div>
                    <div class="searchtickets__button">
                        <p class="searchtickets__button-text">ШУКАТИ</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="travelideas">
            <div class="travelideas__title">
                <h2 class="travelideas__title-text">ІДЕЇ ДЛЯ ПОДОРОЖЕЙ</h2>
            </div>
            <div class="travelideas__images">
                <div class="travelideas__image travelideas__image-one"></div>
                <div class="travelideas__image travelideas__image-two"></div>
                <div class="travelideas__image travelideas__image-three"></div>
                <div class="travelideas__image travelideas__image-four"></div>
            </div>
            <div class="travelideas__subtitle">
                <h2 class="travelideas__subtitle-text">ЦІКАВІ ІДЕЇ ДЛЯ ПОДОРОЖЕЙ ВІД КОМАНДИ АЄРОПОРТУ!</h2>
            </div>
        </div>
        <div class="covid">
            <h2 class="covid__title">COVID-19</h2>
            <p class="covid__subtitle">Шановні пасажири!</p>
            <p class="covid__text">У зв’язку з розповсюдженням коронавірусної інфекції<br />
                графік польотів може бути змінений!<br />
                Дякуємо за розуміння!</p>
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

    <script src="js/main.js"></script>
</body>

</html>