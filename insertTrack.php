<?php
include('header&footer/header.php');
require_once 'insertTrackFunction.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Validacija forme</title>
    <script type="text/javascript" src="check.js"></script>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h1>Unesite podatke o ski stazi radi validacije</h1>
        <br>
        <h2>Podaci o ski stazi</h2>
        <br>
        <b>Naziv staze</b>
        <input type="text" name="naziv_staze" id="name" onblur="check(document.getElementById('name').value)">
        <div id="user">Informacija o validnosti naziva ski staze</div>
        <br>
        <b>Duzina staze</b>
        <input type="text" name="duzina_staze" id="">
        <br>
        <br>
        <b>Kategorija staze</b>
        <input type="text" name="kategorija">
        <br>
        <br>
        <b>Opis staze</b>
        <input type="text" name="opis_staze">
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