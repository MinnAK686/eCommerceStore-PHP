<?php

// Clients Side
Route::get("", [PagesController::class, "home"]);
Route::get("about", [PagesController::class, "about"]);
Route::get("contact", [PagesController::class, "contact"]);
Route::get("products", [PagesController::class, "products"]);
Route::get("products/cart", [PagesController::class, "cart"]);
Route::get("products/checkout", [PagesController::class, "checkout"]);
Route::get("products/detail", [PagesController::class, "productsDetail"]);

// Clients Authentication
Route::get("login", [AuthController::class, "login"]);
Route::post("login", [AuthController::class, "login"]);
Route::get("register", [AuthController::class, "register"]);
Route::post("register", [AuthController::class, "register"]);
Route::get("logout", [AuthController::class, "logout"]);

// Admin Panel
Route::get("admin", [AdminPagesController::class, "home"]);
Route::get("admin/tables", [AdminPagesController::class, "tables"]);

