<?php
$url = isset($_GET['url']) ? $_GET['url'] : '';

switch ($url) {
    case '':
        require_once 'controllers/PageController.php';
        $controller = new PageController();
        $controller->home();
        break;
    case 'folder1':
        require_once 'controllers/PageController.php';
        $controller = new PageController();
        $controller->folder1();
        break;
    case 'folder2':
        require_once 'controllers/PageController.php';
        $controller = new PageController();
        $controller->folder2();
        break;
    default:
        header('HTTP/1.0 404 Not Found');
        echo 'Page not found.';
        break;
}
