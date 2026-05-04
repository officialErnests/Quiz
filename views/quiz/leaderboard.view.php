<div>
<h1>Leaderboard</h1>
<?php
$t_val = 0;
foreach ($leaderboard_post as $key => $value) {
    $t_val += 1;
    $t_username = htmlspecialchars($value["username"]);
    echo "<p>#$t_val $t_username : {$value["result"]} / {$value["max_result"]} </p>";
}
?>
</div>