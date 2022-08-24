<?php 

// require 'src/animal.php';
require 'vendor/autoload.php';

$animal = new App\Animal();
echo $animal->roar();

?>