<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>



 <div class="login_main">
    <div class="login">
        <form action="/login" method="POST">
            <h2>Welcome back!</h2>

            <label for="username"> Username</label>
            <input type="text" placeholder="Username" name="username" id="username">
            <?php if (isset($errors["username"] )) { ?>
                <p>Err: <?=$errors["username"]?></p>
            <?php } ?>

            <label for="password"> Password</label>
            <input type="password" placeholder="Password" name="password" id="password">
            <?php if (isset($errors["password"] )) { ?>
                <p>Err: <?=$errors["password"]?></p>
            <?php } ?>

            <button class="login_btn">Login</button>      
        </form>
    </div>
</div>


<?php require "views/components/footer.php"; ?>