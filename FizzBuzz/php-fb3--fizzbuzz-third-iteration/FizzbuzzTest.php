<?php
class aTest extends PHPUnit_Framework_TestCase { 
  function test_canary() {
    $this->assertEquals(fizzbuzz(), 1);
  }

  function test_acceptance() {
    $this->markTestIncomplete('acceptance test not complete');
    $this->assertEquals(fizzbuzz(range(1,15)), [1,2,'fizz',4,'buzz','fizz',7,8,'fizz','buzz',11,'fizz',13,14,'fizzbuzz']);
  }

}
