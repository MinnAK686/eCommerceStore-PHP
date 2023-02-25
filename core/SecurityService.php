<?php

if (Request::Method() === "POST") {
    if (!hash_equals($_SESSION["csrf_token"], $_POST["csrf_token"])) {
        echo "<h1> <center> Invalid CSRF token! </center> </h1>";
        die();
    } else {
        unset($_SESSION["csrf_token"]);
    }
}

if(empty($_SESSION["csrf_token"])) {
    if (function_exists("random_bytes")) {
        $_SESSION["csrf_token"] = bin2hex(random_bytes(32));
    } elseif (function_exists("mcrypt_create_iv")) {
        $_SESSION["csrf_token"] = bin2hex(mcrypt_create_iv(32,MCRYPT_DEV_URANDOM));
    } else {
        $_SESSION["csrf_token"] = bin2hex(openssl_random_pseudo_bytes(32));
    }
}
