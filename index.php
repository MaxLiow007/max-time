<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/test.php';
        break;
    case '' :
        require __DIR__ . '/test.php';
        break;
    case '/test' :
        require __DIR__ . '/test.php';
        break;
    default:
        // http_response_code(404);
        // require __DIR__ . '/404.php';
        require __DIR__ . '/version2.php';
        break;
}