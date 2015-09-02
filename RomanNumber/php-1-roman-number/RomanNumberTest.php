<?php

class RomanNumberTest extends PHPUnit_Framework_TestCase { 
  public function test_integration() {
    $this->markTestIncomplete('Integration test ');
    $this->assertEquals(romannumber(8), 'VIII');
    $this->assertEquals(romannumber(9), 'IX');
    $this->assertEquals(romannumber(1666), 'MDCLXVI');
  }

  public function test_one_letter_number() {
    $this->assertEquals(romannumber(1), 'I');
    $this->assertEquals(romannumber(5), 'V');
    $this->assertEquals(romannumber(10), 'X');
  }

}
