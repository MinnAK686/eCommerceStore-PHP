<?php

function dd($data) {
    echo "<pre>";
    die(var_dump($data));
}

function view($name, $data = []) {
    extract($data);
    return require "views/$name.view.php"; 
}

function redirect($uri) {
    return header("Location: $uri");
}

function bool(bool $bool) {
    if($bool === true) {
        return 1;
    }
    if($bool === false) {
        return 0;
    }
}
