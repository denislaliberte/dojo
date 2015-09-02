<?php

function fizzbuzz(array $input) {
  $fizzbuzz = function($item) {
    return ($item %3 == 0) ? 'fizz' : $item;
  };
  return array_map($fizzbuzz, $input);
}
