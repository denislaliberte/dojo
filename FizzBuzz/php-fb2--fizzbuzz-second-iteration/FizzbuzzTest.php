<?php

class aTest extends PHPUnit_Framework_TestCase { 
  function test_identity() {
    $this->assertEquals(fizzbuzz(0), 0);
  }

  function test_fizz() {
    $this->assertEquals(fizzbuzz(3), 'fizz');
    $this->assertEquals(fizzbuzz(6), 'fizz');
  }

  function test_buzz() {
    $this->assertEquals(fizzbuzz(5), 'buzz');
  }
}
