<?php
    require_once dirname(__DIR__) . '/public/vendor/autoload.php';

    $helloWorld = new \WebServer\HelloWorld();
    $helloWorld->announce();
?>
