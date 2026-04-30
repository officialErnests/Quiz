<!-- make this grid -->
<!-- <form class="quiz">
    <input name='search_query' value='<?= $_GET["search_query"] ?? ""?>' class="quiz_search">
    <button class="search_btn">Meklēt</button>
</form> -->
<!-- Add editing buttons and delete for admins -->
<div class="quiz" style="padding-left:100px;" class="quiz_btn_games">
    <?php foreach ($quezes as $index => $quiz) { ?>
        <a href="/quiz/show?id=<?= $quiz["id"]?>" class= "quiz_start">
            <h1><?= $quiz["name"]?></h1>
            <p><?= $quiz["description"]?></p>
            <p><?= $quiz["creator_username"]?></p>
        </a>
    <?php }?>
</div>

