<?php

function fizzbuzz(array $input) {
  return array_map(function($a){ return ($a % 3 === 0) ?'fizz':$a;}, $input);
}
