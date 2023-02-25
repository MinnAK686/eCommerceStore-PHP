<?php

class AdminPagesController {
    
    public static function home() {
        if(!isset($_SESSION["is_admin_logged_in"])) {
            redirect("/admin/login");
        }
        view("admin");
    }

    public static function tables() {
        view("admin.tables");
    }

}
