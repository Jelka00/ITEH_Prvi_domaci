<!-- Formatiranje stranice za unos novih blog postova pomocu Bootstrap-a -->
<?php
include ('header.php');
?>
<div class="container">
    <div class="row">
        <div class="col pt-5">
            <h2>Unesite Vase podatke</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
            <label for="title">Naslov</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            <small class="form-text text-muted">Naslov mora biti jedinstven</small>
            </div>
            <div class="form-group">
            <label for="content">Primer</label>
            <textarea class="form-control" id="content" name="content" rows="4" cols="50"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Sacuvaj</button>
            </form>

            <hr>
            
        </div>
    </div>
</div>

<?php
include ('footer.php');
?>