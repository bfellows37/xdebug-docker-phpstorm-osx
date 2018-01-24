<?php
function my_autoload ($pClassName) {
    $filename = __DIR__ . "/src/" . $pClassName . ".php";
    if(file_exists($filename)){
        include(__DIR__ . "/src/" . $pClassName . ".php");
    }
}
spl_autoload_register("my_autoload");