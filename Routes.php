<?php

// Clients Side
Route::get("", [PagesController::class, "home"]);
Route::get("about", [PagesController::class, "about"]);
Route::get("contact", [PagesController::class, "contact"]);


// Admin Panel
Route::get("admin", [AdminPagesController::class, "home"]);
Route::get("admin/tables", [AdminPagesController::class, "tables"]);

