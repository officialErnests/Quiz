<form class="quiz">
    <input name='search_query' value='<?= $_GET["search_query"] ?? ""?>' class="quiz_search">
    <button class="search_btn">Serch</button>
</form>
<div class="quiz" style="padding-left:100px;" class="quiz_btn_games">
    <?php foreach ($quezes as $index => $quiz) { ?>
        <a href="/quiz/show?id=<?= $quiz["id"]?>" class= "quiz_start">
            <h1><?= htmlspecialchars($quiz["name"])?></h1>
            <p><?= htmlspecialchars($quiz["description"])?></p>
            <p><?= htmlspecialchars($quiz["creator_username"])?></p>
        </a>
    <?php }?>
</div>

