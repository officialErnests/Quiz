<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<!-- TODO sanitize output -->
 <p id="tracker"></p>
<span style="display:span;">
    <button onClick="backward()" id="backward" style="display:none;">Backward</button>
    <button onClick="foward()" id="foward">Foward</button>
</span>
<?php $povLazy = []?>
<form action="/quiz/result?id=<?=$post["id"]?>" method="post">
    <div id="finnish" style="display:none;">
    <hr>
    <input type="submit" value="Finnish and submit?">
    <?php foreach ($post as $key => $value) { ?>
        <?php
        if (!isset($value["index"])) {
            continue;
        }
        if (!in_array($value["index"], $povLazy)){ ?>
        </div>
        <div id="q-<?= $value["index"] + 1?>" style="display:none;">
        <h1><?= $value["index"] + 1 . " - " . $value["question"]?></h1>
        <?php array_push($povLazy, $value["index"]);}?>
        <span style="display:flex;">
            <?php
                $t_name = "a-".$value["answer_id"]
            ?>
            <input type="checkbox" id="<?=$t_name?>" name="<?=$t_name?>" value="checked">
            <p><?= $value["answer"]?></p>
        </span>
    <?php }?>
    </div>
</form>

<?php require "views/components/footer.php"; ?>