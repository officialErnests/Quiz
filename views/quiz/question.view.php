<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<!-- TODO sanitize output -->
<form action="/quiz" method="post">
    <?php foreach ($post as $key => $value) { ?>
        <br>
        <h1><?= $value["index"] . " - " . $value["question"]?></h1>
        <h1><?= $value["question"]?></h1>
    <?php }?>
</form>

<?php require "views/components/footer.php"; ?>