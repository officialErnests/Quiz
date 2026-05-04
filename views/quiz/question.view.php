<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<p id="tracker"></p>
<?php $povLazy = []?>
<form action="/quiz/result?id=<?=htmlspecialchars($post["id"])?>" method="post">
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
        <div id="q-<?= htmlspecialchars($value["index"]) + 1?>" style="display:none;">
        <h1><?= htmlspecialchars($value["index"]) + 1 . " - " . $value["question"]?></h1>
        <h2><?php 
        $t_out = false;
        foreach ($post2 as $key2 => $value2) {
            if ($value2["q_id"] == $value["q_id"]) {
                echo "Correct answers " . $value2["count"];
                $t_out = true;
                break;
            }
        }
        if (!$t_out) {
                echo "Read question [no answers necessary]";
        }
        ?></h2>
        <?php array_push($povLazy, $value["index"]);}?>
        <span style="display:flex;">
            <?php
                $t_name = "a-".htmlspecialchars($value["answer_id"])
            ?>
            <input type="checkbox" id="<?=$t_name?>" name="<?=$t_name?>" value="checked">
            <p><?= htmlspecialchars($value["answer"])?></p>
        </span>
    <?php }?>
    </div>
</form>
<span style="display:span;">
    <button onClick="backward()" id="backward" style="display:none;">Backward</button>
    <button onClick="foward()" id="foward">Foward</button>
</span>

<?php require "views/components/footer.php"; ?>