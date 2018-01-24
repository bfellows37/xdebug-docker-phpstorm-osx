<?php
use PHPUnit\Framework\TestCase;

class debugmeTest extends TestCase {

    function test_shouldLoadClass() {
        $werd = new debugme();
        $this->assertEquals('something',$werd->something);
    }
}