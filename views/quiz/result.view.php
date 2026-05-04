<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<?php 
$index = 0;
foreach ($result as $key => $value) {
$index += 1;?>
<p>question <?=$index?> [<?=$value?>/<?=$max_result[$key]?>]</p>
<?php }?>
<p>Total <?=$total_result;?>/<?=$total_max_result;?> ~<?=round($total_result / $total_max_result * 100, 2);?>%</p>
<?php require "views/quiz/leaderboard.view.php"; ?>
<a href="/quiz/show?id=<?= $_GET["id"]?>">Back</a>


<?php require "views/components/footer.php"; ?>