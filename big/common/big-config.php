<?php
date_default_timezone_set('America/Los_Angeles');

$path = basename($_SERVER['PHP_SELF']);
$title = "";
$logo = "";
$logoColor = "";
switch ($path) {
    case "index.php":
        $title = "BIG SITE";
        $logo = "fa-home";
        $logoColor = "#0278ae";
        break;
    case "flexResearch.php":
        $title = "Flexbox Research";
        $logo = "fa-th-list";
        $logoColor = "#af6b58";
        break;
}
