<?php
include('header&footer/header.php');
require 'login_functions.php';
/*if (!empty($_SESSION["id"])) {
    header("Location: index.php");
}*/
$register = new Register();

if (isset($_POST["submit"])) {
    $result = $register->registration($_POST["name"], $_POST["username"], $_POST["email"], $_POST["password"], $_POST["confirmpassword"]);
    //Provera parametara unosa
    if ($result == 1) {
        echo
        "<script> alert('Uspesna registracija'); </script>";
    } elseif ($result == 10) {
        echo
        "<script> alert('Korisnicko ime ili email je zauzet, probajte neki drugi!'); </script>";
    } elseif ($result == 100) {
        echo
        "<script> alert('Lozinka se ne poklapa!'); </script>";
    }
}

?>
<!--HTML kod za login stranicu-->
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Registruj se</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col pt-5">
                <h2>Unesite Vase podatke</h2>
                <form class="" action="" method="post" autocomplete="off">
                    <label for="">Ime i prezime : </label>
                    <input type="text" name="name" class="form-control" required value=""> <br>
                    <label for="">Korisnicko ime : </label>
                    <input type="text" name="username" class="form-control" required value=""> <br>
                    <label for="">Email : </label>
                    <input type="email" name="email" class="form-control" required value=""> <br>
                    <label for="">Lozinka : </label>
                    <input type="password" name="password" class="form-control" required value=""> <br>
                    <label for="">Potvrdite lozinku : </label>
                    <input type="password" name="confirmpassword" class="form-control" required value=""> <br>
                    <button type="submit" name="submit">Registruj se</button>
                </form>
                <br> <br>
                <a href="login.php">Uloguj se</a>
            </div>
        </div>
    </div>
    <br> <br>
    <a href="login.php">Uloguj se</a>
</body>

</html>

<?php
include('header&footer/footer.php');
?>