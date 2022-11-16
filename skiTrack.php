<?php
include('header&footer/header.php');
require_once 'functions.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="findTrack.js"></script>
</head>

<body>
    <?php
    include "connection.php";
    $sql = "SELECT * FROM staze";
    $result = $conn->query($sql);
    ?>
    <form>
        <b>Izaberi stazu:</b>
        <select name="staze" onchange="showSkiTrack(this.value)">
            <?php
            while ($row = $result->fetch_object()) {
            ?>
                <option value="<?php echo $row->id_staze; ?>"><?php echo $row->naziv_staze; ?></option>
            <?php
            }
            ?>
        </select>
    </form>
    <p>
    <div id="fill"><b>Podaci o selektovanoj stazi će biti prikazani ovde. Stranica se ne učitava ponovo.</b></div>
    </p>
    <?php
    $conn->close();
    ?>
</body>

</html>


<?php
include('header&footer/footer.php');
?>