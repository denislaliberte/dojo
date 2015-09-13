<?php

class RomanNumberTest extends PHPUnit_Framework_TestCase {
  public function test_integration_encode(){
    $expected = ["V", "IX", "CXXX"];
    $result = array_map('romannumber',[5,9,130]);
     $this->assertEquals($expected, $result );
  }
}
