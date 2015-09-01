<?php

class aTest extends PHPUnit_Framework_TestCase { 
  function test_identity() {
    $this->assertEquals(fizzbuzz_item(2), 2);
  }

  function test_fizz() {
    $this->assertEquals(fizzbuzz_item(3), 'fizz');
    $this->assertEquals(fizzbuzz_item(6), 'fizz');
  }

  function test_buzz() {
    $this->assertEquals(fizzbuzz_item(5), 'buzz');
    $this->assertEquals(fizzbuzz_item(10), 'buzz');
  }

  function test_fizz_buzz() {
    $this->assertEquals(fizzbuzz_item(15), 'fizzbuzz');
  }

  function test_integration() {
    $this->assertEquals(fizzbuzz(range(1,15)), [1,2,'fizz',4,'buzz','fizz',7,8,'fizz','buzz',11,'fizz',13,14,'fizzbuzz']);
  }
}
