<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<?php
    if (isset($_SESSION["user_id"])) {
        dd($_SESSION["user_id"]);
    }
?>

<?php require "views/components/footer.php"; ?>