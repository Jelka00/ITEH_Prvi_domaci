<?php
include('header&footer/header.php');
require_once 'insertSkipasFunctions.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Unos skipas-a</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h1>Unesite podatke o skipas-u radi povezivanja sa nalogom</h1>
        <br>
        <br>
        <h2>Podaci o skipas-u</h2>
        <br>
        <br>
        <b>Ime i prezime vlasnika kao u sistemu</b>
        <input type="text" name="imeprezime" id="imeprezime">
        <br>
        <br>
        <b>Identifikacioni broj Vaseg skipas-a</b>
        <input type="text" name="skipas_id" id="skipas_id">
        <br>
        <br>
        <b>Sezona(godina izdavanja)</b>
        <input type="text" name="sezona" id="">
        <br>
        <br>
        <b>Trajanje skipas-a</b>
        <input type="text" name="trajanje">
        <br>
        <br>
        <b>Tip(deciji, standard, senior</b>
        <input type="text" name="tip">
        <br>
        <br>
        <input type="submit" value="Unesi podatke" name="submit">
        <input type="reset" value="Obrisi podatke" namer="reset">
    </form>
</body>

</html>


<?php
include('header&footer/footer.php');
?>