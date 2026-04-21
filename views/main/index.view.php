<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<?php
    if (isset($_SESSION["user_id"])) {
        echo $_SESSION["username"] . "<br>";
        echo $_SESSION["role"] . "<br>";
        echo $_SESSION["user_id"];
    }
?>

<?php require "views/components/footer.php"; ?>