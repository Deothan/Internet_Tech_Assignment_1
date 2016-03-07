<?php
/******************
*  Configuration  *
******************/

// Enable all error levels
error_reporting(-1);
// Output all errors to the browser (should only be used in development)
ini_set('display_errors', 1);

// Define some global constants
define('CONTROLLER_DIR', realpath(__DIR__ . '/../controllers'));
define('VIEW_DIR', realpath(__DIR__ . '/../views'));


/*******************
*  Initialization  *
*******************/

// Handles the PHPSESSID cookie and populates the $_SESSION array with the users data
session_start();


/************
*  Routing  *
************/

// Convert i.e. "/foo%40bar?id=1" to "/foo@bar"
$uri = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Run requested controller
switch ($uri) {
    case '/':
        require VIEW_DIR . '/pages/login.php';
        break;
		
	case '/upload':
        require VIEW_DIR . '/pages/upload.php';
        break;

	case '/users':
        require VIEW_DIR . '/pages/users.php';
        break;
		
	case '/images':
        require VIEW_DIR . '/pages/images.php';
        break;
		
	case '/addUsers':
        require VIEW_DIR . '/pages/addUsers.php';
        break;
		
	case '/db':
        require __DIR__ . '/../adminer.php';
        break;
		
    default:
        break;
}
