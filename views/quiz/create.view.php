<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<h1>Create new QUEZ!</h1>

<form method="POST" action="/quiz/create">
    <label for="header">Quez name:</label>
    <input type="text" name="header" id="header" value="<?= $Quez_name?>"/>
    <hr>
    <?php foreach ($Questions as $id => $question) { ?>
        <h1>Question #<?= $id?></h1>
        <label for="Question-<?= $id?>">Question</label>
        <input type="text" name="Question-<?= $id?>" id="Question-<?= $id?>" value="<?= $question["Question"]?>"/>
        <br>
        <?php foreach ($question["Answers"] as $q_id => $q_answer) {?>
            
            <input type="checkbox" id="Q-<?= $id?>-Correct-<?= $q_id?>" name="Q-<?= $id?>-Correct-<?= $q_id?>" value="on" <?= $question["Correct"][$q_id] ? "checked" : "" ?>>
            <input type="text" id="Q-<?= $id?>-Answer-<?= $q_id?>" name="Q-<?= $id?>-Answer-<?= $q_id?>" value="<?= $q_answer?>">
            <input type="submit" name="Q-<?= $id?>-Delete-<?= $q_id?>" value="Delete!">
            <br>
        <?php } ?>
        <input type="submit" name="Create-<?= $id?>" value="Create!">
        <input type="submit" name="Delete-<?= $id?>" value="Delete!">
        <hr>
    <?php }?>
    <input type="submit" name="add" value="Add question">
    <hr>
    <?php if (isset($errors)) {?>
    <p>Err: <?= $errors["content"] ?? "nezināma";?></p>
    <?php }?>
    <input type="submit" name="submit" value="Create!">
</form>
    
<?php require "views/components/footer.php"; ?>