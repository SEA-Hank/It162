<!DOCTYPE html>
<html lang="en">

<head>
    <title>IT162 YINGHENG HE</title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <link rel="stylesheet" href="/css/nav.css" />
    <link rel="stylesheet" href="/css/portal.css" />
    <link rel="stylesheet" href="/css/form.css" />
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
    <main class="wrapper">
        <header>
            <h1><a href="index.php"><i class="logo fa fa-home"></i>IT162 YINGHENG HE</a></h1>
            <nav>
                <ul class="topnav" id="myTopnav">
                    <li><a href="/index.php" <?php if ($navSelected == 'index') {
                                                    echo "class='selected'";
                                                } ?>>Welcome</a></li>
                    <li><a href="/big/index.php" <?php if ($navSelected == 'bigIndex') {
                                                        echo "class='selected'";
                                                    } ?>>Big</a> </li>
                    <li><a href="/aia.php" <?php if ($navSelected == 'aia') {
                                                echo "class='selected'";
                                            } ?>>AIA</a></li>
                    <li><a href="/flowchart.php" <?php if ($navSelected == 'flowchart') {
                                                        echo "class='selected'";
                                                    } ?>>Flowchart/Layout</a></li>
                    <li><a href="/fp/index.php" <?php if ($navSelected == 'fpIndex') {
                                                    echo "class='selected'";
                                                } ?>>Final Project</a></li>
                    <li><a href="/contactme.php" <?php if ($navSelected == 'contactme') {
                                                        echo "class='selected'";
                                                    } ?>>Contact Hank</a></li>
                    <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
                </ul>
            </nav>
        </header>