<?php

if($_POST["demo-name"] & $_POST["demo-email"] & $_POST["demo-message"]) {

    $name = $_POST['name'];
    $email = $_POST["demo-email"];
    $message = $_POST["demo-message"];
    $txt = str_replace("\n.", "\n..", $message);
    $header = "From: " . $email . "\r\n";
    $header .= "Content-type: text/html\r\n";

mail("rashikbuksh@gmail.com", $name + " Messaged you from your website",


$message . "From: " . $email, $header);

}

?>