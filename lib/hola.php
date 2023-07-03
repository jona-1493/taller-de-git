<?php
// Autor: Jonathan Hernandez jona@brandcar.com 
require('HolaMundo.php');

print "Introduce tu nombre:";
$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
print new HolaMundo($nombre);
