<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? "Idk"?></title>
    <link rel="stylesheet" href="/css/components/navbar.css">
    <link rel="stylesheet" href="/css/components/header.css">
    <link rel="stylesheet" href="/css/components/footer.css">
    <?php if (isset($customStyles)){
            foreach ($customStyles as $customStyle){?>
                <link rel="stylesheet" href="/css/<?= $customStyle?>">
    <?php   }
        }?>
</head>
<body>