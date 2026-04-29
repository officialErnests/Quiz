<header class="nav">
    <nav class="navbar">
        
        <div>
            <i class="fa-solid fa-house"></i>
            <a href="/" class="">Home</a>
        </div>

        <div class="logo">
            <h1>QUEZZZZZZ</h1>
        </div>
        

         <div class="navbar__right">
        <?php if(isset($_SESSION["username"])){ ?>
        <span>Hello, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</span>
        <a href="/logout">Logout</a> 
            <?php } else{ ?>
                <a href="/signup">Sign up</a>
                <a href="/login">Login</a>   
            <?php } ?>
        </div>

    </nav>



</header>