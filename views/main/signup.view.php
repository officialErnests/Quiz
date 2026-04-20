<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>


<div class="signup_main">
        <div class="signup">
            <form action="/signup" method="POST">
                <h2>Create account</h2>

                <label> Create username</label>
                <input type="text" placeholder="Username" name="username">
                <p>3 to 25 characters long</p>
                <?php if (isset($errors["username"] )) { ?>
                    <p>Err: <?=$errors["username"]?></p>
                <?php } ?>
              
                <label for="pwd"> Create password</label>
                <input type="password" placeholder="Password" name="password" id="pwd">
                <p>4 to 64 characters long</p>
                <?php if (isset($errors["password"] )) { ?>
                    <p>Err: <?=$errors["password"]?></p>
                <?php } ?>
                
                <label for="pwd_2"> Repeat password</label>
                <input type="password" placeholder="Repeat Password" name="password_2" id="pwd_2">

                
                <button class="signup_btn">Create account</button>
                
            </form>
        </div>
</div>

<?php require "views/components/footer.php"; ?>