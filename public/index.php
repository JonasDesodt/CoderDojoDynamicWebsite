<?php

// Get the URL path, e.g., '/nl/about'
$uri = $_SERVER['REQUEST_URI'];

// Remove the query string (if any)
$uri = strtok($uri, '?');

// Split the URI into parts
$uriParts = explode('/', trim($uri, '/'));

// The first part of the URI is your locale (in this case, 'nl')
$locale = $uriParts[0];

switch ($_SERVER['REQUEST_URI']) {
    case '/':
    case '/home':
        require_once('../pages/home.php');
        break;
    case '/news':
        require_once('../pages/news.php');
        break;
    case '/about':
        require_once('../pages/about.php');
        break;
    case '/contact':
        require_once('../pages/contact.php');
        break;
    default:
        require_once('../pages/404.php');
        break;
}

?>