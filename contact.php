<?php
include "./resources/blade/lib/BladeOne.php";
use eftec\bladeone;

$pages = './pages';
$compiledFolder = './compiled';
$blade = new bladeone\BladeOne($pages, $compiledFolder);
echo $blade->run("contact");