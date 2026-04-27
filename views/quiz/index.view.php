<<<<<<< HEAD
    <!-- make this grid -->
    <form>
        <input name='search_query' value='<?= $_GET["search_query"] ?? ""?>' class="quiz_search">
        <button class="search_btn">Search</button>
    </form>
    <!-- Add editing buttons and delete for admins -->
    <div class="quiz">
            <span class= "quiz_start">
                <div>
                    <button class="quiz_btn_games"> 
                        <h2>Games<h2>

                        <div>
                            <a href="#"> Play </a>
                        </div>         
                    </button>

                    
                <div>
            </span>
    </div>
=======
<!-- make this grid -->
<form>
    <input name='search_query' value='<?= $_GET["search_query"] ?? ""?>'>
    <button>Meklēt</button>
</form>
<!-- Add editing buttons and delete for admins -->
<div class="quiz" style="padding-left:100px;">
    <?php foreach ($quezes as $index => $quiz) { ?>
        <a href="/quiz/show?id=<?= $quiz["id"]?>">
            <hr>
            <h1><?= $quiz["name"]?></h1>
            <p><?= $quiz["description"]?></p>
            <p><?= $quiz["creator_username"]?></p>
        </a>
    <?php }?>
</div>
>>>>>>> origin/Creating-main-layout
