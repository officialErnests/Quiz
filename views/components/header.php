<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
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