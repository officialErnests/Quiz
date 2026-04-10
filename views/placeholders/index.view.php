<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<h1>SUPER AWESOME</h1>

<a href="/create">Izveido ierakstu</a>
<form>
    <input name='search_query' value='<?= $_GET["search_query"] ?? ""?>'>
    <button>Meklēt</button>
</form>

<?php if (count($posts) == 0)
{ ?>
    <p>
        Okkk, ko tu gribi tagad izdarīt tagad ir nospiest<br>
        Windows -> Windows + R un uzrakstīt "shutdown /s /t 0" un uzspiest enter <br>
        Linux -> Ctrl + Alt + T un uzrakstiet "sudo shutdown now" un uzspest enter <br>
        Mac -> Cmd + space un uzrakstiet "Terminal" un uzspiest enter, tad rakstīt "sudo shutdown -h now" un uzspiest enter
    </p>
<?php } else 
{ ?>
    <ul>
        <?php foreach($posts as $post) 
        { ?>
            <li>
                <a href="show?id=<?= $post['id']?>">
                    <?= htmlspecialchars($post["category_name"]) ?> - <?=htmlspecialchars($post["content"])?> 
                </a> 
            </li>
        <?php } ?> 
    </ul>
<?php } ?>

<?php require "views/components/footer.php"; ?>