<?php
//Unos podataka o stazi u bazu kroz AJAX validaciju naziva
require 'connection.php';
require_once 'model/staze.php';
$staze = new Staze();
if (isset($_POST['naziv_staze'])) {

    // Provera da li je naslov ili sadrzaj prazan
    if (!empty($_POST['naziv_staze'])) {

        // Sigurnosna provera da nije neki html
        $track_name = mysqli_real_escape_string($conn, htmlspecialchars($_POST['naziv_staze']));
        $track_length = mysqli_real_escape_string($conn, htmlspecialchars($_POST['duzina_staze']));
        $category = mysqli_real_escape_string($conn, htmlspecialchars($_POST['kategorija']));
        $description = mysqli_real_escape_string($conn, htmlspecialchars($_POST['opis_staze']));

        // Ubacivanje podataka u bazu
        $insert_query = $staze->add($conn, $track_name, $track_length, $category, $description);
        //$insert_query = mysqli_query($conn, "INSERT INTO staze(naziv_staze,duzina_staze,kategorija,opis_staze) VALUES('$track_name','$track_length','$category','$description')");

        //Provera da li su podaci ubaceni
        if ($insert_query) {
            echo "<script>alert('Podaci ubaceni!');window.location.href = 'posts.php';</script>";
            exit;
        } else {
            echo "<h3>Podaci nisu ubaceni!</h3>";
        }
    } else {
        echo "<h4>Popunite sva polja!</h4>";
    }
}
