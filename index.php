<?php
// 328/quiz/index.php
// This is my controller

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the necessary files
require_once ('vendor/autoload.php');

// Instantiate the F3 Base class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function() {
    // Render a view page
    $view = new Template();
    echo $view->render('views/home.html');
});

// Define a survey route
$f3->route('GET /survey', function() {
    // Render a view page
    $view = new Template();
    echo $view->render('views/survey.html');
});

// Run Fat-Free
$f3->run();