<?php

function romannumber($input) {
  $values = [
    new number(1,'I'),
    new number(5,'V')
    ];
  foreach($values as $value)  {
    if($value->test($input)) {
      return $value->roman();
    }
  }
}

class number {
  private $number;
  private $roman;

  public function __construct($number,$roman) {
    $this->number = $number;
    $this->roman = $roman;
  }

  public function test($input) {
    return $input == $this->number;
  }

  public function roman() {
    return $this->roman;
  }
}

