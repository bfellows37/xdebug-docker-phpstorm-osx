<?php
function my_autoload ($pClassName) {
    include(__DIR__ . "/src/" . $pClassName . ".php");
}
spl_autoload_register("my_autoload");