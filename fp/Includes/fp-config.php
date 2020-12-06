<?php
$path = basename($_SERVER['PHP_SELF']);
$showMap = false;
$showReCAPTCHA = false;
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
        $showMap = true;
        break;
    case "contact.php":
        $pageId = "CONTACT";
        $showReCAPTCHA = true;
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
    "Bathroom" => "gallery.php#bath",
    "Blinds & Window Treatment" => "gallery.php#blinds",
    "Lighting & Ceiling Fans" => "gallery.php#lighting",
    "Paint" => "gallery.php#paint",
    "Lawn & Garden" => "gallery.php#lawn",
    "Kitchen & Kitchenware" => "gallery.php#kitchen"
);



$siteKey = "6LchY9YZAAAAAG7s20VGwl5ojgNXyWNvk0pL2m87";
$secretKey = "6LchY9YZAAAAAD1yRZt2swpk8rl2rFPyC-hshxmK";
