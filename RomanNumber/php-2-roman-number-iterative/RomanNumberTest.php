<?php

class aTest extends PHPUnit_Framework_TestCase {
  function test_identity() {
    $this->assertEquals(
      [romannumber(3),romannumber(9),romannumber(1666)], 
      ['III','IX','MDCLXVI']
    );
  }

  function test_simple_number() {
    $this->assertEquals(romannumber(1),'I');
    $this->assertEquals(romannumber(5),'V');
  }

  function test_repeat_number() {
    $this->assertEquals(romannumber(3),'III');
    $this->assertEquals(romannumber(8),'VIII');
  }

  function test_special_number() {
    $this->assertEquals(romannumber(4),'IV');
  }
}
