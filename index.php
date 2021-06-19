<?php
    $servername = "localhost:3306/Airport";
    $username = "airport";
    $password = "Airport009";
    $db = "airport";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);

    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $result = $conn->query("SELECT * FROM airport.planes");

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        echo "<h1 class='h5_b_1'>" . $row["id"] . $row["name"]."</h1>";
        }
    } else {
        echo "0 results";
    }
?>