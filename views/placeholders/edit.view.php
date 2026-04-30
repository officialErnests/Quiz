<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1>Rediģēt "<?= $_GET["content"]?>"</h1>
<form method="POST">
    <label>Ieraksts: <input name="content" value="<?= htmlspecialchars($_GET["content"])?>"/></label>
    <select name="category_id" id="category_id">
        <?php foreach ($categories as $categorie) { ?>
        <option value="<?= $categorie['id']?>" <?= $categorie['id'] == $post['category_id']? 'selected': ''?>><?= $categorie['category_name']?></option>
        <?php }?>
    </select>
    <input type="submit" value="YUSSS">
    <input name="id" type="hidden" value="<?= $_GET["id"]?>">
    <?php if (isset($errors)) {?>
        <p>Kļūda: <?= $errors["content"] ?? "nezināma";?></p>
    <?php }?>
</form>
<?php require "views/components/footer.php"; ?>