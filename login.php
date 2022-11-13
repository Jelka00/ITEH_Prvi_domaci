<?php
include('header.php');
require 'login_functions.php';

/*if (!empty($_SESSION["id"])) {
    header("Location: index.php");
}*/

$login = new Login();

if (isset($_POST["submit"])) {
    $result = $login->login($_POST["usernameemail"], $_POST["password"]);
    //Pokretanje sesije ukoliko se poklapaju parametri za logovanje
    if ($result == 1) {
        $_SESSION["login"] = true;
        $_SESSION["id"] = $login->idUser();
        header("Location: index.php");
    } elseif ($result == 10) {
        echo
        "<script> alert('Pogresna lozinka!'); </script>";
    } elseif ($result == 100) {
        echo
        "<script> alert('Korisnik nije registrovan!'); </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Uloguj se</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col pt-5">
                <h2>Unesi parametre za logovanje</h2>
                <form class="" action="" method="post" autocomplete="off">
                    <label for="">Korisnicko ime ili email : </label>
                    <input type="text" name="usernameemail" class="form-control" required value=""> <br>
                    <label for="">Lozinka</label>
                    <input type="password" name="password" class="form-control" required value=""> <br>
                    <button type="submit" name="submit">Uloguj se</button>
                </form>
                <br>
                <a href="registration.php">Registracija novog korisnika</a>
            </div>
        </div>
    </div>
</body>

</html>
<?php
include('footer.php');
?>