<?php
include('header.php');
require_once 'functions.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Validacija forme</title>
    <script type="text/javascript" src="check.js"></script>
</head>

<body>
    <form>
        <h1>Unesite podatke o ski stazi radi validacije</h1>
        <br>
        <h2>Podaci o ski stazi</h2>
        <br>
        <b>Naziv staze</b>
        <input type="text" name="track_name" id="name" onblur="check(document.getElementById('name').value)">
        <div id="user">Informacija o validnosti naziva ski staze</div>
        <br>
        <b>Duzina staze</b>
        <input type="text" name="track_length" id="">
        <br>
        <br>
        <b>Kategorija staze</b>
        <input type="text" name="category">
        <br>
        <br>
        <b>Opis staze</b>
        <input type="text" name="description">
        <br>
        <br>
        <input type="submit" value="Unesi podatke" name="submit">
        <input type="reset" value="Obrisi podatke" namer="reset">
    </form>
</body>

</html>


<?php
include('footer.php');
?>