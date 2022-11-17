<?php
require_once 'functions.php';
include ('header&footer/header.php');
$row = update_get();
?>

     <div class="container">
        <div class="col pt-5">
            <h2>Update Data</h2>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $row['id_objave'];?>" method="post">
            <div class="form-group">
            <label for="update_title">Naslov</label>
            <input type="text" name="update_title" class="form-control" id="update_title" placeholder="Title" value="<?php echo $row['naslov'];?>" required>
            <small class="form-text text-muted">Naslov mora biti jedinstven</small>
            </div>
            <div class="form-group">
            <label for="update_content">Sadrzaj</label>
            <textarea class="form-control" id="update_content" name="update_content" rows="4" cols="50" value="ad" required><?php echo $row['sadrzaj'];?>
            </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Sacuvaj</button>
            </form>
        </div>
    </div>

<?php
include ('header&footer/footer.php');
?>