<?php
require_once 'model/staze.php';
$staze = new Staze();
if (!isset($_GET["track_name"])) {
    echo "Parametar track_name nije prosleđen!";
} else {
    $name = $_GET["track_name"];
    include "connection.php";

    $result = $staze->getStaza($conn, $name);
    if ($result->num_rows != 0) {
        echo "0";
    } else {
        echo "1";
    }
    $conn->close();
}
