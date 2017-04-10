<?php

include_once 'vendor/autoload.php';
include_once 'config.php';

if (isset($_POST['g-recaptcha-response'])) {
    $recaptcha = new \ReCaptcha\ReCaptcha($secret);
    $response = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

    if ($response->isSuccess()) {
        echo '<h2>Success</h2>';
    } else {
        echo '<h2>Something went wrong</h2>';
    }

    var_dump($_POST);
}
