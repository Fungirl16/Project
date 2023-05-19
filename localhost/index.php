<?php

declare(strict_types=1);

$uriParts = parse_url($_SERVER["REQUEST_URI"]);

switch ($uriParts['path'] ?? '') {
    case '':
    case '/':
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'main.php';
        break;
    case '/animals-theory':
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'animals-theory.html';
        break;
    case '/test':
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'test.html';
        break;
    case '/web-content':
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'web-content.php';
        break;
    default:
        http_response_code(404);
        require_once __DIR__.DIRECTORY_SEPARATOR . '404.php';
}