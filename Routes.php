<?php

// Clients Side
Route::get("", [PagesController::class, "home"]);
Route::get("about", [PagesController::class, "about"]);
Route::get("contact", [PagesController::class, "contact"]);
Route::get("products", [PagesController::class, "products"]);
Route::get("products/cart", [PagesController::class, "cart"]);
Route::get("products/checkout", [PagesController::class, "checkout"]);
Route::get("products/detail", [PagesController::class, "productsDetail"]);

// Admin Panel
Route::get("admin", [AdminPagesController::class, "home"]);
Route::get("admin/tables", [AdminPagesController::class, "tables"]);


// Clients Authentication
Route::get("login", [AuthController::class, "login"]);
Route::post("login", [AuthController::class, "login"]);
Route::get("register", [AuthController::class, "register"]);
Route::post("register", [AuthController::class, "register"]);
Route::get("logout", [AuthController::class, "logout"]);

// Admin Authentication
Route::get("admin/login", [AuthController::class, "admLogin"]);
Route::post("admin/login", [AuthController::class, "admLogin"]);
Route::get("admin/logout", [AuthController::class, "admLogout"]);
