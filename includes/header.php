<?php include 'portal-config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <link rel="stylesheet" href="/css/nav.css" />
    <link rel="stylesheet" href="/css/portal.css" />
    <link rel="stylesheet" href="/css/form.css" />
    <link rel="stylesheet" href="/css/aia.css" />
    <style>
        .myclass-img {
            margin: 5px
        }

        .intruction {
            margin: 10px
        }
    </style>
</head>

<body>
    <!-- START WRAPPER -->
    <div class="wrapper">
        <header>
            <h1><a href="index.php"><i class="logo fa <?= $logo ?>" style="color: <?= $logo_color ?>;"></i><?= $title ?></a></h1>
            <nav>
                <ul class="topnav" id="myTopnav">
                    <?php foreach ($nav1 as $key => $value) {
                        $className = '';
                        if ($path == $key) {
                            $className = 'selected';
                        }
                    ?>
                        <li><a href="<?= $key ?>" class="<?= $className ?>"><?= $value ?></a></li>
                    <?php } ?>
                    <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
                </ul>
            </nav>
        </header>