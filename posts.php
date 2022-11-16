<?php
include('header&footer/header.php');
require_once 'functions.php';
?>
<div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
          <?php get_all_data();?>
          </div>
        </div>
      </div>
<?php
include('header&footer/footer.php');
?>