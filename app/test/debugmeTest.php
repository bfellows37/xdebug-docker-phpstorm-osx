<?php

class debugmeTest extends BaseTest {

    function test_shouldLoadClass() {
        $werd = new debugme();
        $this->assertEquals('something',$werd->something);
    }
}