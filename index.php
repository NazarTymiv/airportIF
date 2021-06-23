<?php
    $servername = "localhost:3306/airport";
    $username = "airport";
    $password = "Airport009";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    if(isset($_POST['submit'])){
        if(!empty($_POST['whereon']) && !empty($_POST['whereout']) && !empty($_POST['dateOfDeparture']) && !empty($_POST['dateOfArrival']) && !empty($_POST['adults']) && !empty($_POST['children'])) {
            $whereon = $_POST['whereon'];
            $whereout = $_POST['whereout'];
            $dateOfDeparture = $_POST['dateOfDeparture'];
            $dateOfArrival = $_POST['dateOfArrival'];
            $adults = $_POST['adults'];
            $children = $_POST['children'];
            $id = 0;

            $query = "insert into airport.tickets(`id`, `whereon`, `whereout`, `dateOfDeparture`, `dateOfArrival`, `adults`, `children`) values($whereon, $whereout, $dateOfDeparture, $dateOfArrival, $adults, $children)";
            
            $run = mysqli_query($conn, $query) or die(mysqli_error());

            if($run){
                echo "Form submit successfull...";
            } else {
                echo "Form not submitted";
            }
        } else {
            echo "All fields require";
        }
    }

?> 