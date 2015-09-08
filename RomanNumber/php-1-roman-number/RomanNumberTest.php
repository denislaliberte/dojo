<?php

class RomanNumberTest extends PHPUnit_Framework_TestCase { 
  public function test_integration() {
    $this->assertEquals(romannumber(8), 'VIII');
    $this->assertEquals(romannumber(1666), 'MDCLXVI');
    $this->assertEquals(romannumber(9), 'IX');
  }

  public function test_one_letter_number() {
    $this->assertEquals(romannumber(1), 'I');
    $this->assertEquals(romannumber(5), 'V');
    $this->assertEquals(romannumber(10), 'X');
  }

  public function test_triple() {
    $this->assertEquals(romannumber(3), 'III');
    $this->assertEquals(romannumber(8), 'VIII');
    $this->assertEquals(romannumber(30), 'XXX');
  }

  public function test_special_case() {
    $this->assertEquals(romannumber(900), 'CM');
    $this->assertEquals(romannumber(400), 'CD');
  }
}
