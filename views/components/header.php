<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? "Emuārs"?></title>
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/nav.css">
    <?php if (isset($customStyles)){?>
        <link rel="stylesheet" href="/css/<?= $customStyles ?>">
    <?php }?>
</head>
<body>