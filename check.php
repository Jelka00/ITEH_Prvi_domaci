<?php
if (!isset($_GET["track_name"])) {
    echo "Parametar track_name nije prosleđen!";
} else {
    $name = $_GET["track_name"];
    include "connection.php";

    $sql = "SELECT * FROM staze WHERE naziv_staze='" . $name . "'";
    $result = $conn->query($sql);
    if ($result->num_rows != 0) {
        echo "0";
    } else {
        echo "1";
    }
    $conn->close();
}
