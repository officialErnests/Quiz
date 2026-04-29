<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<!-- TODO sanitize output -->
<?php $povLazy = []?>
<form action="/quiz" method="post">
    <div id="finnish">
    <input type="submit" value="Finnish and submit?">
    <?php foreach ($post as $key => $value) { ?>
        <?php if (!in_array($value["index"], $povLazy)){ ?>
        </div>
        <div id="q-<?= $value["index"] + 1?>">
        <h1><?= $value["index"] + 1 . " - " . $value["question"]?></h1>
        <?php array_push($povLazy, $value["index"]);}?>
        <span style="display:flex;">
            <?php
                $t_name = "a-".$value["id"]
            ?>
            <input type="checkbox" id="<?=$t_name?>" name="<?=$t_name?>" value="checked">
            <p><?= $value["answer"]?></p>
        </span>
    <?php }?>
    </div>
</form>

<?php require "views/components/footer.php"; ?>