<?php

class AuthController {
    public static function login() {
        if (isset($_SESSION["is_logged_in"])) {
            redirect("/");
        }
        $errors = null;
        $emailErr = null;
        $passwordErr = null;

        if (Request::Method() === "POST") {
            $email = request("email");
            $password = request("password");

            if (empty($email) && empty($password)) {
                $errors = "Please fill the required field!";
            } elseif (empty($email)) {
                $emailErr = "Email address can't be empty";
            } elseif (empty($password)) {
                $passwordErr = "Password can't be empty";
            } else {
                if (!validateEmail($email)) {
                    $emailErr = "Invalid email format!";
                } else {
                    $checkPassword = App::get("db")->query(
                        "SELECT * FROM users WHERE email='$email'"
                    )->getOne();
                    if (!$checkPassword) {
                        $errors = "Wrong credentials!";
                    } else {
                        $dbPassword = App::get("db")->query(
                            "SELECT password FROM users WHERE email='$email'"
                        )->getOne();
                        
                        if ($dbPassword->password !== $password) {
                            // $errors = "Wrong Password";
                            $errors = "Wrong Credentials";
                        } else {
                            $user = App::get("db")->query(
                                "SELECT * FROM users WHERE email='$email'"
                            )->getOne();
                            $_SESSION["fullname"] = $user->fullname;
                            $_SESSION["email"] = $user->email;
                            $_SESSION["is_logged_in"] = true;
                            redirect("/");
                        }
                    }
                    
                }
            }

        }
        view("login", [
            "errors" => $errors,
            "emailErr" => $emailErr,
            "passwordErr" => $passwordErr
        ]);
    }
    public static function register() {
        if(isset($_SESSION["is_logged_in"])) {
            redirect("/");
        }
        $errors = null;
        $nameError = null;
        $emailErr = null;
        $passwordErr = null;
        if(Request::Method() === "POST") {
            $fullname = request("fullname");
            $email = request("email");
            $password = request("password");
            if(!$fullname && !$email && !$password) {
                $errors = "Please fill the required field!";
            }elseif(!$fullname) {
                $nameError = "Username can't be empty!";
            }elseif(!$email) {
                $emailErr = "Email address can't be empty!";
            }elseif(!$password) {
                $passwordErr = "Password can't be empty!";
            }else {
                if(validateEmail($email)) {
                    if(strlen($password) < 6) {
                        $passwordErr = "Password must be at least 6 characters!";
                    }else{
                        $info = [
                            "fullname" => $fullname,
                            "email" => $email,
                            "password" => $password
                        ];
                        $response = App::get("db")->insert($info,"users");
                        if(!$response) {
                            $_SESSION["fullname"] = $fullname;
                            $_SESSION["email"] = $email;
                            $_SESSION["is_logged_in"] = true;

                            redirect("/");
                        }
                    }
                }else{
                    $emailErr = "Invalid email format!";
                }
            }
            
        }

        view("register", [
            "errors" => $errors,
            "nameError" => $nameError,
            "emailErr" => $emailErr,
            "passwordErr" => $passwordErr
        ]);
    }
    public static function logout() {
        session_start();
        session_destroy();
        redirect("/login");
    }
}
