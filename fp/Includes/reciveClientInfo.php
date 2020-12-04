<?php
$firstName =  $_POST["firstName"];
$LastName =  $_POST["LastName"];
$Phone =  $_POST["Phone"];
$Email =  $_POST["Email"];
$recaptcha = $_POST["g-recaptcha-response"];

if (isset($recaptcha)) {
    $thanks = "1";
}

//todo send email and Verifying the user's response
