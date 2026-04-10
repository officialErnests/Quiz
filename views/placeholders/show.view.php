<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1> <?=htmlspecialchars($post["category_name"]) ?> - <?=htmlspecialchars($post["content"])?? "nothing found"?></h1>
<a href="edit?id=<?= $post['id']?>"> edit </a> 
<form action="/delete" method="post">
    <input type="hidden" name="id" value="<?= $post["id"]?>"><br>
    <input type="submit" value="Delete">
</form>
<br>
<?php require "controllers/comments/index.php"; ?>

<?php require "views/components/footer.php"; ?>