<?php

// standard php library
spl_autoload_register(function ($class) {
    
    var_dump($class);
   
    $class = str_replace('OOP\\', '', $class);
    
    var_dump($class);
    
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    
    var_dump($class);
    
    $filepath = __DIR__ . '/includes/' . $class . '.php';
    
    $filepath = str_replace('/', DIRECTORY_SEPARATOR, $filepath);
    
    var_dump($filepath);
    
    require_once $filepath;
});

use OOP\car;
use OOP\truck;
use OOP\vehicle;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vehicles</h1>
    <?php
        $truck = new truck("Pickup Truck", 4);
        var_dump($truck);

        $car = new car("Sedan", 4);
        var_dump($car);
    ?>
</body>
</html>