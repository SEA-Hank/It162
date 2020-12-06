<?php
date_default_timezone_set('America/Los_Angeles');

$path = $_SERVER['PHP_SELF'];
switch ($path) {

    case '/index.php':
        $title = "Yingheng he's IT162 HOME PAGE";
        $logo = 'fa-home';
        $PageID = 'Home';
        $logo_color = 'darkred';
        break;

    case '/contactme.php':
        $title = "Yingheng he's IT162 ContactMe PAGE";
        $logo = 'fa-paper-plane-o';
        $PageID = 'Contactme';
        $logo_color = '#0f4c81';
        break;
    case '/aia.php':
        $title = "Yingheng he's IT162 AIA PAGE";
        $logo = 'fa-universal-access';
        $PageID = 'AIA';
        $logo_color = '#bdd340';
        break;
    case '/flowchart.php':
        $title = "Yingheng he's IT162 FLowChart PAGE";
        $logo = 'fa-wpexplorer';
        $PageID = 'FLowChart';
        $logo_color = '#f46f60';
        break;
    case '/big/index.php':
        $title = "Yingheng he's IT162 BigIndex PAGE";
        $logo = 'fa-newspaper-o';
        $PageID = 'bigIndex';
        $logo_color = '#6a8dc3';
        break;
    case '/fp/index.php':
        $title = "Yingheng he's IT162 FpIndex PAGE";
        $logo = 'fa-envelope-square';
        $PageID = 'fpIndex';
        $logo_color = '#83ca54';
        break;
}

$nav1['/index.php'] = "Welcome";
$nav1['/big/index.php'] = "Big";
$nav1['/aia.php'] = "AIA";
$nav1['/contactme.php'] = "Contact Hank";
$nav1['https://docs.google.com/document/d/175kxw1mbQlBe9q7tjuY2rJVcHBND1EoyfQ55Mpv8V5E/edit?usp=sharing'] = "Flowchart & Wireframes";
$nav1['/fp/template.php'] = "Final Template";
$nav1['/fp/index.php'] = "Final Project";
