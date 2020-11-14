<?php include 'big-config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> <?= $title ?> </title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/navStyles.css">
    <link rel="stylesheet" href="/css/big.css">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="/js/navigation.js" type="text/javascript"></script>
</head>

<body>
    <header>
        <section id="section-title"><i style="color: <?= $logoColor ?>;" class="logo fa <?= $logo ?>"></i> <?= $title ?> - <span>YINGHENG HE</span></section>
        <nav>
            <div id='cssmenu'>
                <ul>
                    <li><a href='/index.php'>IT162 Portal</a></li>

                    <li></i><a href='/big/index.php'>Home</a></li>
                    <li></i><a href='/big/flexResearch.php'>Flexbox</a></li>
                    <li></i><a href='/big/shoppingCarts.php'>Shopping Carts</a></li>
                    <li></i><a href='/big/galleries.php'>Galleries</a></li>
                    <li></i><a href='/big/siteVsApp.php'>site Vs App</a></li>
                </ul>
            </div>
        </nav>
    </header>