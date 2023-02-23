<?php

class AdminPagesController {
    
    public static function home() {
        view("admin");
    }

    public static function tables() {
        view("admin.tables");
    }

}
