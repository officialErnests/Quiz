<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<a href="/">Back</a>
<h1><?=htmlspecialchars($post["name"])?> [<?=$post["count"]?> questions]</h1>
<p><?=htmlspecialchars($post["description"])?></p>
<p>by: <?=htmlspecialchars($post["username"])?></p>

<a href="/quiz/question?id=<?= $post["id"]?>">TAKE QUIZ</a>

<?php if ($_SESSION["role"] == "admin") {?>
<hr>
<!-- <a href="/quiz/edit">edit</a>
<a href="/quiz/delete">delete</a> -->
<?php }?>

<?php require "views/components/footer.php"; ?>