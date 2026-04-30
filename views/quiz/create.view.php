<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<h1>Create new QUEZ!</h1>

<form method="POST" action="/quiz/create#Question-<?= count($Questions) - 2?>">
    <label for="header">Quez name:</label>
    <input type="text" name="header" id="header" value="<?= $Quez_name?>"/>
    <label for="Description">Description:</label>
    <input type="text" name="description" id="description" value="<?= $Quez_description?>"/>
    <hr>
    <?php foreach ($Questions as $id => $question) { ?>
        <h1>Question #<?= $id + 1?></h1>
        <label for="Question-<?= $id?>">Question</label>
        <input type="text" name="Question-<?= $id?>" id="Question-<?= $id?>" value="<?= $question["Question"]?>"/>
        <?php foreach ($question["Answers"] as $q_id => $q_answer) {?>
            <br>
            <input type="checkbox" id="Q-<?= $id?>-Correct-<?= $q_id?>" name="Q-<?= $id?>-Correct-<?= $q_id?>" value="on" <?= $question["Correct"][$q_id] ? "checked" : "" ?>>
            <input type="text" id="Q-<?= $id?>-Answer-<?= $q_id?>" name="Q-<?= $id?>-Answer-<?= $q_id?>" value="<?= $q_answer?>" placeholder="Type your question :))">
            <input type="submit" name="Create-<?= $id?>" value="Create!" hidden>
            <input type="submit" name="Q-<?= $id?>-Delete-<?= $q_id?>" value="Delete!">
        <?php } ?>
        <br>
        <span style="display: flex; height: 30px">
            <input type="submit" name="Create-<?= $id?>" value="Create!">
            <p>--------------------------------------------</p>
            <input type="submit" name="Delete-<?= $id?>" value="Delete!">
        </span>
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