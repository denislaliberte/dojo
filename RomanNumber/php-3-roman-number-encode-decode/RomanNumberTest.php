<?php

class RomanNumberTest extends PHPUnit_Framework_TestCase {
  public function test_integration_encode(){
    $this->markTestIncomplete("todo");
    $expected = ["V", "IX", "CXXX"];
    $result = array_map('romannumber',[5,9,130]);
     $this->assertEquals($expected, $result );
  }
  public function test_integration_decode(){
    $this->markTestIncomplete("todo");
    $expected = [5,9,130];
    $result = array_map('romannumber',["V", "IX", "CXXX"]);
     $this->assertEquals($expected, $result );
  }

  public function test_decode_simple_case() {
     $this->assertEquals(1, romannumber('I'));
     $this->assertEquals(10, romannumber('X'));
  }

  public function test_decode_two_numbers() {
     $this->assertEquals(11, romannumber('XI'));
     $this->assertEquals(105, romannumber('CV'));
     $this->assertEquals(3, romannumber('III'));
  }

  public function test_decode_special_case() {
     $this->assertEquals(9, romannumber('IX'));
  }

  public function test_encode_simple_case() {
     $this->assertEquals("I", romannumber(1));
     $this->assertEquals("X", romannumber(10));
  }
}
