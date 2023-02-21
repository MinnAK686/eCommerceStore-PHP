<?php

class PagesController {
    public static function home() {
        view("index");
    }
    public static function about() {
        view("about");
    }
    public static function contact() {
        view("contact");
    }
}
