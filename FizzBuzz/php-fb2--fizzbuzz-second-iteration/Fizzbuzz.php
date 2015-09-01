<?php

function fizzbuzz($input) {
  $string = '';
  if($input % 3 == 0 ) $string .= 'fizz';
  if($input % 5 == 0 ) $string .= 'buzz';
  return empty($string) ? $input : $string;
}
