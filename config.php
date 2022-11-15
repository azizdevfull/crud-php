
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crud-php";

    $conn = new mysqli($servername, $username, $password, $dbname);
    // $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connect Filed" . $conn->connect_error);
    }

    ?>