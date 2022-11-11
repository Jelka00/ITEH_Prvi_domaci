<?php
include('header.php');
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
include('footer.php');
?>