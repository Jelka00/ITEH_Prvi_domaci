<?php
include('header.php');

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