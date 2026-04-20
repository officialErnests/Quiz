<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<div class="login_main">
        <div class="login">
            <form action="/signup" method="POST">
                <h2>Create account</h2>

                <label> Create username</label>
                <input type="text" placeholder="Username" name="username">
                <hr>
                <label for="pwd"> Create password</label>
                <input type="password" placeholder="Password" name="password" id="pwd">
                <hr>
                <label for="pwd_2"> Repeat password</label>
                <input type="password" placeholder="Repeat Password" name="password_2" id="pwd_2">

                <hr>
                <button class="login_btn">Create account</button>

                
            </form>
        </div>
</div>

<?php require "views/components/footer.php"; ?>