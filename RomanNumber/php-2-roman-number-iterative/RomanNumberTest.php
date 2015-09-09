<?php

class aTest extends PHPUnit_Framework_TestCase {
  function test_identity() {
    $this->markTestIncomplete('integration test');
    $this->assertEquals(
      [romannumber(3),romannumber(9),romannumber(1666)], 
      ['III','IX','MDCLXI']
    );
  }

  function test_simple_number() {
    $this->assertEquals(romannumber(1),'I');
    $this->assertEquals(romannumber(5),'V');
  }
}
