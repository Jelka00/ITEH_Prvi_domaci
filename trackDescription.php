<?php
include ('header&footer/header.php');
require 'connection.php';
require_once 'model/staze.php';
$staze = new Staze();
global $conn;
$name = $_GET["name"];
$get_data = $staze->getStaza($conn, $name);
if (mysqli_num_rows($get_data) > 0) {
    echo '<table>
              <tr>
                <th><h2>Opis staze</h2></th>
              </tr>';
    while ($row = mysqli_fetch_assoc($get_data)) {

        echo '<tr>
            <td>' . $row['opis_staze'] . '</td>
            </tr>';
    }
} else {
    echo "<h3>Dodajte jos opisa staza!</h3>";
}
'<div>
<a href="trackMap.php">Vrati se na pretragu</a>
</div>';

include ('header&footer/footer.php');
?>