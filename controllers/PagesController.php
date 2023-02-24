<?php

class PagesController {
    public static function home() {
        if(!isset($_SESSION["is_logged_in"])) {
            redirect("/login");
        }
        view("index");
    }
    public static function cart() {
        if(!isset($_SESSION["is_logged_in"])) {
            redirect("/login");
        }

        view("cart");
    }
    
    public static function productsDetail() {
        if(!isset($_SESSION["is_logged_in"])) {
            redirect("/login");
        }

        view("products-detail");
    }

    public static function checkout() {
        if(!isset($_SESSION["is_logged_in"])) {
            redirect("/login");
        }

        view("checkout");
    }
    public static function products() {

    }
    public static function about() {
        if(!isset($_SESSION["is_logged_in"])) {
            redirect("/login");
        }

        view("about");
    }
    public static function contact() {
        if(!isset($_SESSION["is_logged_in"])) {
            redirect("/login");
        }

        view("contact");
    }
}
