<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<div class="main">
    <a href="/">Back</a>
    <h1><?=htmlspecialchars($post["name"])?> [<?=$post["count"]?> questions]</h1>
    <hr>
    <div class="main__desc">
        <div class="main__desc__left">
            <h1>Description</h1>
            <p><?=htmlspecialchars($post["description"])?></p>
            <p>by: <?=htmlspecialchars($post["username"])?></p>
        </div>
        <div class="main__desc__right">
            <?php  require "views/quiz/leaderboard.view.php"; ?>
        </div>
    </div>
    <hr>
    <a href="/quiz/question?id=<?= $post["id"]?>">TAKE QUIZ</a>
</div>


<?php if ($_SESSION["role"] == "admin") {?>
<!-- <hr> -->
<!-- <a href="/quiz/edit">edit</a>
<a href="/quiz/delete">delete</a> -->
<?php }?>

<?php require "views/components/footer.php"; ?>