<?php
class aTest extends PHPUnit_Framework_TestCase { 
  function test_canary() {
    $this->assertEquals(fizzbuzz(), 1);
  }
}
