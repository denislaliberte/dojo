<?php

function romannumber($input) {
  $values = [
    new number(1000, 'M'),
    new number(900, 'CM'),
    new number(500, 'D'),
    new number(400, 'CD'),
    new number(100,'C'),
    new number(90,'XC'),
    new number(50, 'L'),
    new number(40, 'XL'),
    new number(10, 'X'),
    new number(9, 'IX'),
    new number(5,'V'),
    new number(4,'IV'),
    new number(1,'I'),
    ];
  $candidate = new number($input);
  foreach($values as $value)  {
    $candidate->match($value);
  }
  return $candidate->roman;
}

class number {
  private $number;
  public $roman;

  public function __construct($number,$roman = '') {
    $this->number = $number;
    $this->roman = $roman;
  }

  private function greater($input) {
    return $this->number >= $input->number;
  }
  
  public  function match($input) {
   while($this->greater($input)) {
     $this->roman .= $input->roman;
     $this->number -= $input->number;
   }
  }
}

