<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<h1>Izveido bloga ierakstu!</h1>

<form method="POST">
    <label>Ievads: <input name="content" /></label>
    <input type="submit" value="YUSSS">
    <?php if (isset($errors)) {?>
        <p>Kļūda: <?= $errors["content"] ?? "nezināma";?></p>
    <?php }?>
</form>
    
<?php require "views/components/footer.php"; ?>