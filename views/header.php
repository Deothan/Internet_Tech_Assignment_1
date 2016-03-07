<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="../public/Style/stylesheet.css" rel="stylesheet" type="text/css" />
<title><?php if (isset($title)) { echo $title; } ?></title>

<?php
$dbuser = 'root';
$dbpw = 'pw';
$dbhost = 'localhost';
$dbName = 'imagedb';

try {
    $connection = new PDO('mysql:host='.$dbhost.';dbname=' . $dbName, $dbuser, $dbpw);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}?>

</head>
<body>
<?php if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){ ?>
    <form id="users_button" method="post" action="/users">
   		<button> Users </button>
    </form>
    <form id="login_button" method="post" action="/images">
   		<button> Images </button>
    </form>
    <form id="login_button" method="post" action="/">
   		<button> Login </button>
    </form><br>
<?php } ?>