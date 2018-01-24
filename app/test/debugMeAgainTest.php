<?php

class debugMeAgainTest extends BaseTest {

    function test_shouldLoadClass() {
        $werd = new debugMeAgain();
        $this->assertEquals('something',$werd->something);
    }
}