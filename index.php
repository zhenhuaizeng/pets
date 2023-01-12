<?php

//  This is my Controller for the pets project

//  Turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

//  Create an instance of the Base class
$f3 = Base::instance();

//Java equivalent -> Base f3 = new Base();

//Define a default route ("home page for hello project")

$f3 -> route('GET /',function(){
    echo '<h1>Pet Home</h1>';
});

$f3 -> run();