<?php

const ROOT_DIR = __DIR__;
const BASE_PATH = '';
const PROFILE_ID = 'ares';

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//ini_set('error_reporting', E_ALL);
//error_reporting(E_ALL);

require_once ROOT_DIR . '/includes/helpers.php';
require_once ROOT_DIR . '/includes/db.php';

$routes = [
    // Web routes
    '/' => ROOT_DIR . '/pages/home.php',
    '/about' => ROOT_DIR . '/pages/about.php',
    '/resume' => ROOT_DIR . '/pages/resume.php',
    '/portfolio' => ROOT_DIR . '/pages/portfolio.php',
    '/contact' => ROOT_DIR . '/pages/contact.php',

    // API routes
    '/api/profile' => ROOT_DIR . '/api/profile.php',
    '/api/skills' => ROOT_DIR . '/api/skills.php',
    '/api/experiences' => ROOT_DIR . '/api/experiences.php',
    '/api/gallery' => ROOT_DIR . '/api/gallery.php',
    '/api/form' => ROOT_DIR . '/api/form.php',
];

if (isset($routes[current_page()])) {
    require_once $routes[current_page()];
} else {
    http_response_code(404);
    die("Error 404 Not Found.");
}
