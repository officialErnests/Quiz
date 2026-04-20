<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>



 <div class="login_main">
        <div class="login">
            <form>
                <h2>Hello, user!</h2>

                <label> Create username</label>
                <input placeholder="Username..." name="username">
                <label> Create password</label>
                <input placeholder="Password..." name="password">
                <label> Repeat password</label>
                <input placeholder="Other password..." name="password">


                <button class="login_btn">Create account</button>

                
            </form>
        </div>
   </div>


<?php require "views/components/footer.php"; ?>