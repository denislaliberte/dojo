<?php

function fizzbuzz($input) {
  $return = $input;
  if($input % 3 == 0 ) $return = 'fizz';
  if($input % 5 == 0 ) $return = 'buzz';
  if($input == 0 ) $return = $input;
  return $return;
}
