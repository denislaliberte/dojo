<?php

class FizzbuzzTest extends PHPUnit_Framework_TestCase { 
  /**
   * @group acceptance
   */
  function test_acceptance_test() {
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
    $this->assertEquals($expected_result,fizzbuzz(range(1,15)));
  }

  function test_unchange_number() {
    $this->assertEquals([1], fizzbuzz([1]) );
  }

  function test_change_three_to_fizz() {
    $this->assertEquals(['fizz'], fizzbuzz([3]) );
  }

  function test_change_six_to_fizz() {
    $this->assertEquals(['fizz'], fizzbuzz([6]) );
  }

  function test_change_five_to_buzz() {
    $this->assertEquals(['buzz'], fizzbuzz([5]) );
  }
}



