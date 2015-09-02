<?php

function fizzbuzz(array $input) {
  $fizzbuzz = function($item) {
    $return = '';
    if($item % 3 == 0) $return .= 'fizz';
    if($item % 5 == 0) $return .= 'buzz';
    if(empty($return)) $return = $item;
    return $return;
  };
  return array_map($fizzbuzz, $input);
}
