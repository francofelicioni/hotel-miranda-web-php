<?php
include "../blade/lib/BladeOne.php";
use eftec\bladeone;

$views = '../views';
$compiledFolder = '../compiled';
$blade = new bladeone\BladeOne($views, $compiledFolder);
echo $blade->run("offers");