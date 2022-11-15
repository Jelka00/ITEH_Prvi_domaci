<!--Prikazivanje inputa i slanje istog na dalju obradu za prikaz opisa staze-->
<?php
include('header.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="suggest.js" type="text/javascript"></script>
    <script type="text/javascript">
        function place(ele) {
            document.getElementById('txt').value = ele.innerHTML;
            document.getElementById("livesearch").style.display = "none";
        }
    </script>
    <style type="text/css">
        #livesearch {
            margin: 5px;
            width: 220px;
        }

        #txt {
            border: solid #A5ACB2;
            margin: 5px;
        }
    </style>
</head>

<body onload="document.getElementById('txt').focus()">
    <form action="trackDescription.php" method="get">
        <input type="text" id="txt" size="32" name="name" onkeyup="suggestTrack(this.value)">
        <div id="livesearch"></div> <br>
        <button type="submit" name="submit">Prosledi</button>
    </form>
</body>

<?php
include('footer.php');
?>