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
}
