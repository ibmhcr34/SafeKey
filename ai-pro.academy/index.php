<?php

$request = $_SERVER['REQUEST_URI'];

$url_components = explode('?', $request);
$path = $url_components[0];

switch ($path) {
    case '':
    case '/' :
        require __DIR__ . '/resources/views/main.php';
        break;
    case '/contact' :
        require __DIR__ . '/resources/views/contact.php';
        break;
    case '/courses' :
        require __DIR__ . '/resources/views/courses.php';
        break;
    case '/learning' :
        require __DIR__ . '/resources/views/learning-paths.php';
        break;
    case '/courses/all-access' :
        require __DIR__ . '/resources/views/courses/all-access.php';
        break;
    case '/courses/complete-python-mastery' :
        require __DIR__ . '/resources/views/courses/complete-python-mastery.php';
        break;
    case '/courses/complete-sql-mastery' :
        require __DIR__ . '/resources/views/courses/complete-sql-mastery.php';
        break;
    case '/courses/master-modern-c++' :
        require __DIR__ . '/resources/views/courses/master-modern-c++.php';
        break;
    case '/courses/react-18for-beginners' :
        require __DIR__ . '/resources/views/courses/react-18for-beginners.php';
        break;
    case '/courses/the-ultimate-html5' :
        require __DIR__ . '/resources/views/courses/the-ultimate-html5.php';
        break;
    case '/courses/the-ultimate-java' :
        require __DIR__ . '/resources/views/courses/the-ultimate-java.php';
        break;
    case '/courses/the-ultimate-js' :
        require __DIR__ . '/resources/views/courses/the-ultimate-js.php';
        break;
    case '/courses/the-ultimate-next.js-series' :
        require __DIR__ . '/resources/views/courses/the-ultimate-next.js-series.php';
        break;
    case '/learning/back-end' :
        require __DIR__ . '/resources/views/learning_paths/back-end.php';
        break;
    case '/learning/front-end' :
        require __DIR__ . '/resources/views/learning_paths/front-end.php';
        break;
    case '/learning/fundamentals' :
        require __DIR__ . '/resources/views/learning_paths/fundamentals.php';
        break;
    case '/learning/game-development' :
        require __DIR__ . '/resources/views/learning_paths/game-development.php';
        break;
    case '/learning/mobile-development' :
        require __DIR__ . '/resources/views/learning_paths/mobile-development.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/resources/views/404.php';
        break;
}

// Норм норм :D