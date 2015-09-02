<?php
class aTest extends PHPUnit_Framework_TestCase { 
  function test_acceptance() {
    $this->assertEquals(fizzbuzz(range(1,15)), [1,2,'fizz',4,'buzz','fizz',7,8,'fizz','buzz',11,'fizz',13,14,'fizzbuzz']);
  }

  function test_identity() {
    $this->assertEquals(fizzbuzz([2]), [2]);
  }

  function test_fizz() {
    $this->assertEquals(fizzbuzz([3]), ['fizz']);
  }

  function test_buzz() {
    $this->assertEquals(fizzbuzz([5]), ['buzz']);
  }

  function test_fizzbuzz() {
    $this->assertEquals(fizzbuzz([15]), ['fizzbuzz']);
  }
}
