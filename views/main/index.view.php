<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<!-- TODO implement so you can continue last quiz $_SESSION["quiz"] -->
<?php if (isset($_SESSION["user_id"])) {?>
    <?php if ($_SESSION["role"] == "user" || $_SESSION["role"] == "admin") { ?>
        <h1>Hello and welcome back, <?= htmlspecialchars($_SESSION["username"])?></h1>
        <h1>QUEZIS</h1>
        <?php require "./controllers/quiz/index.php" ?>

    <?php } else { ?>
        <h1>Something went wrong... Please refresh and try again</h1>
        <?php } ?>
    <?php if ($_SESSION["role"] == "admin") { ?>
        <hr>
        <h1>Task creation goes here for admins</h1>
        <a href="/quiz/create">create task</a>
    <?php }?>
<?php } else { ?>
    <div class="index_logo">
        <h1>TRY YOUR BEST!</h1>
        <h2> Try your abilities with QUEZZZZ
    </div>

    <div class="window_main">
        <div class="window">
            <h2>Play a quizes about popular themes</h2>
             <img src="assets/Meme.png" alt="smart" width="90px" height="90px">
        </div>
    </div>

     <div class="window_main">
        <div class="window">
            <h2>Try all what you can do!</h2>
        </div>
    </div>

        <div class="window_main">
            <div class="window">
                <h2>Show others that you are smarther than them</h2>
                <img src="assets/download.png" alt="smart" width="90px" height="90px">
            </div>
        </div>

     <div class="window_main">
        <div class="window">
            <h2>Enjoy your free time</h2>
        </div>
    </div>
<?php } ?>

<?php require "views/components/footer.php"; ?>