<?php
if (!isset($_GET["id"])) {
    echo "Parametar ID nije prosleđen!";
} else {
    $helperVar = $_GET["id"];
    //Uspostavljanje konekcije
    include "connection.php";
    require_once 'model/staze.php';
    $staze = new Staze();
    //Citanje podataka o stazi
    $result = $staze->getStazaByID($conn, $helperVar);

    //Ispis naziva kolona u tabeli
    echo "<table border='1'>
<tr>
<th>Naziv staze</th>
<th>Duzina staze</th>
<th>Kategorija staze</th>
</tr>";
    //Ispis podataka o stazi
    while ($row = $result->fetch_object()) {
        echo "<tr>";
        echo "<td>" . $row->naziv_staze . "</td>";
        echo "<td>" . $row->duzina_staze . "</td>";
        echo "<td>" . $row->kategorija . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    $conn->close();
}
?>