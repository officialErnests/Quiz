<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<?php $customStyles="syle.css" ?>

 <div class="login_main">
        <div class="login">
            <form>
                <h2>Welcome back!</h2>

                <label>Username</label>
                <input placeholder="Username..." name="username">
                <label>Password</label>
                <input placeholder="Password..." name="password">

                <a href="#">Forgot password?</a>

                <button class="login_btn">Login</button>

                
            </form>
        </div>
   </div>


<?php require "views/components/footer.php"; ?>