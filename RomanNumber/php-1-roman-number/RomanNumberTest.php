<?php

class RomanNumberTest extends PHPUnit_Framework_TestCase { 
  public function test_integration() {
    $this->markTestIncomplete('Integration test ');
    $this->assertEquals(romannumber(8), 'VIII');
    $this->assertEquals(romannumber(9), 'IX');
    $this->assertEquals(romannumber(1666), 'MDCLXVI');
  }

}
