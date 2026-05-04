<form class="quiz quiz-s">
    <div class="quiz__serch">
        <div class="quiz__serch__center">
            <input name='search_query' value='<?= $_GET["search_query"] ?? ""?>' class="quiz_search">
            <button class="search_btn">Serch</button>
        </div>
    </div>
</form>
<div class="quiz quiz-m" class="quiz_btn_games">
    <?php foreach ($quezes as $index => $quiz) { ?>
        <a href="/quiz/show?id=<?= $quiz["id"]?>" class= "quiz_start">
            <h1><?= htmlspecialchars($quiz["name"])?></h1>
            <p><?= htmlspecialchars($quiz["description"])?></p>
            <p>by: <?= htmlspecialchars($quiz["creator_username"])?></p>
        </a>
    <?php }?>
</div>

