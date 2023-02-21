<?php 

// Bind Dependencies

App::bind("config", require "config.php");
App::bind("db", new DB(App::get("config")["database"]));

