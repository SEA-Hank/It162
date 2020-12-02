<?php
$path = basename($_SERVER['PHP_SELF']);
$showMap = false;
$pageId = "";
switch ($path) {
    case "index.php":
        $pageId = "HOME";
        break;
    case "gallery.php":
        $pageId = "GALLERY";
        break;
    case "servicearea.php":
        $pageId = "SERVICE AREA";
        break;
    case "contact.php":
        $pageId = "CONTACT";
        break;
    case "template.php":
        $pageId = "HOME";
        break;
}

$navList = array(
    "HOME" => "index.php",
    "GALLERY" => "gallery.php",
    //"SERVICES" => "gallery.php",
    "SERVICE AREA" => "servicearea.php",

    "CONTACT" => "contact.php"
);

$subNavList = array(
    "Bath & Faucets" => "gallery.php#bath",
    "Blinds & Window Treatment" => "gallery.php#blinds",
    "Lighting & Ceiling Fans" => "gallery.php#lighting",
    "Paint" => "gallery.php#paint",
    "Lawn & Garden" => "gallery.php#lawn",
    "Kitchen & Kitchenware" => "gallery.php#kitchen"
);
