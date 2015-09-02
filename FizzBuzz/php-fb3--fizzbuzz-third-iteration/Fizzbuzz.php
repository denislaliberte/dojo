<?php

function fizzbuzz(array $input) {
  $fizzbuzz = function($item) {
    $return = $item;
    if($item % 3 == 0) $return ='fizz';
    if($item % 5 == 0) $return ='buzz';
    return $return;
  };
  return array_map($fizzbuzz, $input);
}
