
<?php


include "./resources/blade/lib/BladeOne.php";
include './connection/db.php';

// require 'vendor/autoload.php';
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__); 
// $dotenv->load();

$mapsKey = $_ENV['GOOGLE_MAPS_API_KEY'];

use eftec\bladeone;

$pages = './pages';
$compiledFolder = './compiled';
$blade = new bladeone\BladeOne($pages, $compiledFolder);

$query = "SELECT * FROM rooms";
$rooms = $conn->query($query);

echo $blade->run("index", ['rooms' => $rooms->fetch_All()]);

