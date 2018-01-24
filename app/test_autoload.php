<?php
require __DIR__.'/test/baseTest.php';
function my_autoload ($pClassName) {
    $filename = __DIR__ . "/src/" . $pClassName . ".php";
    if(file_exists($filename)){
        require $filename;
    }
}
spl_autoload_register("my_autoload");