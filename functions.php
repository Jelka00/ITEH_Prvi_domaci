<!--Povezivanje sa bazom-->
<?php
require 'connection.php';

function get_all_data()
{
    //Povlacenje svih podataka iz baze
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM objave");

    if (mysqli_num_rows($result) > 0) {

        echo '<div class="col-12 pt-5"><h1>Sve objave</h1></div>';

        //Prolazak kroz sve povucene podatke
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="https://via.placeholder.com/150x100" alt="Card image cap">
                <div class="card-body">
                    <h4 class=""><a class="text-secondary" href="single.php?id_objave=' . $row['id_objave'] . '">' . $row['naslov'] . '</a></h4>
                     <p class="card-text">' . htmlspecialchars_decode(substr($row['sadrzaj'], 0, 100)) . '...</p>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="single.php?id=' . $row['id_objave'] . '" class="btn btn-sm btn-outline-primary" role="button" aria-pressed="true">Pogledaj</a>
                    <a href="update.php?id=' . $row['id_objave'] . '" class="btn btn-sm btn-outline-secondary" role="button" aria-pressed="true">Izmeni</a>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            ';
        }
    } else {
        echo "<h3>Nema dodatih objava, navratite kasnije!</h3>";
    }
}
//Ubacivanje podataka u bazu

if (isset($_POST['naslov']) && isset($_POST['sadrzaj'])) {

    // Provera da li je naslov ili sadrzaj prazan
    if (!empty($_POST['naslov']) && !empty($_POST['sadrzaj'])) {

        // Sigurnosna provera da nije neki html
        $title = mysqli_real_escape_string($conn, htmlspecialchars($_POST['naslov']));
        $content = mysqli_real_escape_string($conn, htmlspecialchars($_POST['sadrzaj']));

        // Provera da li naslov postoji
        $check_content = mysqli_query($conn, "SELECT 'naslov' FROM objave WHERE sadrzaj = '$title'");

        if (mysqli_num_rows($check_content) > 0) {
            echo "<h3>Ova objava vec postoji!</h3>";
        } else {

            // Ubacivanje podataka u bazu
            $insert_query = mysqli_query($conn, "INSERT INTO objave(naslov,sadrzaj) VALUES('$title','$content')");

            //Provera da li su podaci ubaceni
            if ($insert_query) {
                echo "<script>alert('Podaci ubaceni!');window.location.href = 'posts.php';</script>";
                exit;
            } else {
                echo "<h3>Podaci nisu ubaceni!</h3>";
            }
        }
    } else {
        echo "<h4>Popunite sva polja!</h4>";
    }
}
//Prikupljanje podataka za azuriranje

function update_get()
{
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        global $conn;
        $id = $_GET['id'];
        $get_id = mysqli_query($conn, "SELECT * FROM objave WHERE id_objave='$id'");
        if (mysqli_num_rows($get_id) === 1) {
            $row = mysqli_fetch_assoc($get_id);
            return ($row);
        }
    }
}
//Azuriranje objave

if (isset($_POST['update_title']) && isset($_POST['update_content'])) {

    //Provera da li je naslov ili sadrzaj prazan

    if (!empty($_POST['update_title']) && !empty($_POST['update_content'])) {

        // Sigurnosna provera

        $title = mysqli_real_escape_string($conn, htmlspecialchars($_POST['update_title']));
        $content = mysqli_real_escape_string($conn, htmlspecialchars($_POST['update_content']));

        $id = $_GET['id'];

        $update_query = mysqli_query($conn, "UPDATE objave SET naslov='$title',sadrzaj='$content' WHERE id_objave=$id");

        if ($update_query) {
            echo "<script>alert('Objava azurirana!');window.location.href = 'posts.php';</script>";
            exit;
        } else {
            echo "<h3>Neuspesno azuriranje objave!</h3>";
        }
    } else {
        echo "<h4>Popunite sva neophodna polja!</h4>";
    }
}
function delete()
{
    global $conn;
    if (isset($_GET['id_objave']) && is_numeric($_GET['id_objave'])) {

        $userid = $_GET['id_objave'];
        $delete_user = mysqli_query($conn, "DELETE FROM objave WHERE id_objave='$userid'");

        if ($delete_user) {
            echo "<script>alert('Objava obrisana!');window.location.href = 'insert.php';</script>";
            exit;
        } else {
            echo "Objavu nije moguce obrisati!";
        }
    }
}
//Funkcija za povlacenje i stampanje polja za brisanje objave
function get_all_edit_data()
{
    global $conn;
    $get_data = mysqli_query($conn, "SELECT * FROM objave");
    if (mysqli_num_rows($get_data) > 0) {
        echo '<table>
              <tr>
                <th><h2>Izmeni podatke</h2></th>
              </tr>';
        while ($row = mysqli_fetch_assoc($get_data)) {

            echo '<tr>
            <td>' . $row['naslov'] . '</td>
            <td>
            <a href="update.php?id_objave=' . $row['id_objave'] . '">Izmeni</a> |
            <a href="delete.php?id_objave=' . $row['id_objave'] . '">Obrisi</a>
            </td>
            </tr>';
        }
        echo '</table>';
    } else {
        echo "<h3>Dodajte jos objava!</h3>";
    }
}
function getTrackDescription($name)
{
    global $conn;
    $get_data = mysqli_query($conn, "SELECT * FROM staze WHERE naziv_staze='$name'");
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
        echo "<h3>Dodajte jos objava!</h3>";
    }
}
