<?php

function dd($data) {
    echo "<pre>";
    die(var_dump($data));
}

function view($name, $data = []) {
    extract($data);
    return require "views/$name.view.php"; 
}

function request($name) {
    if(Request::Method() === "GET") {
        return $_GET[$name];
    }
    if(Request::Method() === "POST") {
        return $_POST[$name];
    }
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

function validateEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      // Email is valid
      list($username, $domain) = explode('@', $email);
      if (checkdnsrr($domain, 'MX')) {
        // Email can receive emails
        return true;
      } else {
        // Domain doesn't have an MX record
        return false;
      }
    } else {
      // Email is invalid
      return false;
    }
  }
