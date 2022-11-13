<?php
include('header.php');
//Gasenje trenutne sesije korisnika prilikom logout-a
require 'login_functions.php';
$_SESSION = [];
session_unset();
session_destroy();
header("Location: login.php");
echo
"<script> alert('Izlogovali ste se sa naloga!'); </script>";
?>
<?php
include('footer.php');
?>