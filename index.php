<?php
    $servername = "localhost:3306/airport";
    $username = "airport";
    $password = "Airport009";

    $whereon = $_POST['whereon'];
    $whereout = $_POST['whereout'];
    $dateOfDeparture = $_POST['dateOfDeparture'];
    $dateOfArrival = $_POST['dateOfArrival'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $id = rand(00000, 99999);

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    $sql = "insert into airport.tickets(id, whereon, whereout, dateOfDeparture, dateOfArrival, adults, children) values('$id', '$whereon', '$whereout', '$dateOfDeparture', '$dateOfArrival', '$adults', '$children')";
    mysqli_query($conn, $sql);

    header("Location: main.php");
?> 