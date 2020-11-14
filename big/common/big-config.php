<?php
date_default_timezone_set('America/Los_Angeles');

$path = basename($_SERVER['PHP_SELF']);
$title = "";
$logo = "";
$logoColor = "";
switch ($path) {
    case "index.php":
        $title = "Home - Client Questionnaire";
        $logo = "fa-home";
        $logoColor = "#0278ae";
        break;
    case "flexResearch.php":
        $title = "Flexbox Research";
        $logo = "fa-th-list";
        $logoColor = "#af6b58";
        break;
    case "shoppingCarts.php":
        $title = "Shopping Carts Research";
        $logo = "fa-shopping-cart";
        $logoColor = "#389393";
        break;
    case "galleries.php":
        $title = "Galleries Research";
        $logo = "fa-picture-o";
        $logoColor = "#de4463";
        break;
    case "siteVsApp.php":
        $title = "Site Vs App Research";
        $logo = "fa-balance-scale";
        $logoColor = "#726a95";
        break;
    case "map.php":
        $title = "Google Map";
        $logo = "fa-map-marker";
        $logoColor = "#ac4b1c";
        break;
    case "accessibility.php":
        $title = "Web Accessibility";
        $logo = "fa-user-circle";
        $logoColor = "#f6ab6c";
        break;
    case "webCams.php":
        $title = "Web live Camera";
        $logo = "fa-camera";
        $logoColor = "#0278ae";
        break;
    case "calendar.php":
        $title = "Google Calendar";
        $logo = "fa-calendar";
        $logoColor = "#c62a88";
        break;
}
