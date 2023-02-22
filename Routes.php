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

