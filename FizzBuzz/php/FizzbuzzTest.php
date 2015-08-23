<?php

class FizzbuzzTest extends PHPUnit_Framework_TestCase { 
  function test_acceptance_test() {
    $this->markTestIncomplete('wip');
    $expected_result = [
      1,
      2,
      'fizz',
      4,
      'buzz',
      'fizz',
      7,
      8,
      'fizz',
      'buzz',
      11,
      'fizz',
      13,
      14,
      'fizzbuzz',
      ];
    $this->assertEquals($expected_result,fizzbuzz(range(11,15)));
  }
}



