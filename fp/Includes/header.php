<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="construction website">
    <meta name="keywords" content="construction">
    <meta name="author" content="Hank">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/css-reset.css">
    <link rel="stylesheet" href="./css/icon/iconfont.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="icon" href="./images/logo.png">
    <title>
        <?= $pageId ?>
    </title>
</head>

<body>
    <section id="topPhoneCall">
        <div id="topPhoneCallWrapper">
            <span class="infoWrapper">
                <span class="iconfont icon-phone1 phonelogo"></span>
                <span class="text-call">CALL</span>
                <a href="tel:2069605680">206-960-5680</a>
                NOW</span>
            <!-- <span class="infoWrapper"> FOR REQUEST SERVICES</span> -->
            <span class="infoWrapper"><?= $pageId ?></span>
        </div>
    </section>
    <section id="navigation">
        <div id="navWrapper">
            <img class="imgclick" id="logo" src="./images/logo.png">
            <span id="menuLogo" class="iconfont icon-nav-list"></span>
            <nav id="nav">
                <ul id="masterNav" class="clearfloat">
                    <?php foreach ($navList as $key => $value) {
                        $className = $key == $pageId ? "currentPage" : "";
                    ?>
                        <?php if ($key != "GALLERY") { ?>
                            <li class="<?= $className ?>"><a href="./<?= $value ?>"><?= $key ?></a></li>
                        <?php } else { ?>
                            <li class="subNavigation <?= $className ?>"><a href="./<?= $value ?>"> GALLERY<i id="arrow"></i></a> </i>
                                <ul id="subNav">
                                    <?php foreach ($subNavList as $subKey => $subValue) { ?>
                                        <li><a href="./<?= $subValue ?>"><?= $subKey ?></a></li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        <?php } ?>
                </ul>
            </nav>
        </div>
    </section>