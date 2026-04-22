<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>


<?php if (isset($_SESSION["user_id"])) {?>
    <?php if ($_SESSION["role"] == "user" || $_SESSION["role"] == "admin") { ?>
        <h1>Hello and welcome back, <?= htmlspecialchars($_SESSION["username"])?></h1>
    <?php } else { ?>
        <h1>Something went wrong... Please refresh and try again</h1>
        <?php } ?>
    <?php if ($_SESSION["role"] == "admin") { ?>
        <h1>Task creation goes here</h1>
    <?php }?>
<?php } else { ?>
<h1>Landing page goes in here</h1>
<?php } ?>

<?php require "views/components/footer.php"; ?>