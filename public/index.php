<?php

$language = $_REQUEST['lang'] ?? 'en';

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