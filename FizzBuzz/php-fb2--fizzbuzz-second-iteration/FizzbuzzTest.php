<?php

class aTest extends PHPUnit_Framework_TestCase { 
  function test_identity() {
    $this->assertEquals(fizzbuzz(0), 0);
  }
}
