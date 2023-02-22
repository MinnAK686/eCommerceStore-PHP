<?php

class PagesController {
    public static function home() {
        view("index");
    }
    public static function cart() {
        view("cart");
    }
    
    public static function productsDetail() {
        view("products-detail");
    }

    public static function checkout() {
        view("checkout");
    }
    public static function products() {

    }
    public static function about() {
        view("about");
    }
    public static function contact() {
        view("contact");
    }
}
