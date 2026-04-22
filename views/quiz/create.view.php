<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<h1>Create new QUEZ!</h1>

<form method="POST">
    <label for=""></label>
    <input name="header" id="header" />
    <input type="submit" value="YUSSS">

    <?php if (isset($errors)) {?>
        <p>Kļūda: <?= $errors["content"] ?? "nezināma";?></p>
    <?php }?>
</form>
    
<?php require "views/components/footer.php"; ?>