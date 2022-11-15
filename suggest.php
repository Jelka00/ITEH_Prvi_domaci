<!--Komunikacija sa bazom i povlacenje podataka-->
<?php
if (!isset($_GET["enter"])) {
    echo "Parametar Unos nije prosleđen!";
} else {
    $pomocna = $_GET["enter"];
    include "connection.php";
    $sql = "SELECT naziv_staze FROM staze WHERE naziv_staze LIKE '$pomocna%'ORDER BY naziv_staze";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        echo "U bazi ne postoji staza koja počinje na " . $pomocna;
    } else {
        while ($row = $result->fetch_object()) {
?>
            <a href="#" onclick="place(this)"><?php echo $row->naziv_staze; ?></a>
            <br />
<?php
        }
    }
    $conn->close();
}
?>