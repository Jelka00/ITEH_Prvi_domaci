<?php
require_once 'functions.php';
include ('header&footer/header.php');
$row = update_get();
?>

<div class="container">
    <div class="row">
    <div class="col-12 pt-5">
    
    <h2 class="pt-5"><?php echo $row['naslov'] ?></h2>
    <p><?php echo htmlspecialchars_decode($row['sadrzaj']) ?></p></div>
    </div>
</div>

<?php
include ('header&footer/footer.php');
?>