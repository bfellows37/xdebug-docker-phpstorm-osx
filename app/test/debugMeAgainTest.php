<?php
include_once(__DIR__.'/../test_autoload.php');
use PHPUnit\Framework\TestCase;

class debugMeAgainTest extends TestCase {

    function test_shouldLoadClass() {
        $werd = new debugMeAgain();
        $this->assertEquals('something',$werd->something);
    }
}