<?php

function BinarySearchIterative2($item, array $array) {
  if(empty($array)) return -1;
  $max = count($array);
  $min = 0;
  while($max > $min) {
    $middle = get_middle_index($min, $max);
    if($item == $array[$middle]) return $middle;
    if($item < $array[$middle]) $max = $middle;
    if($item > $array[$middle]) $min = $middle +1;
  }
  return -1;
}

function get_middle_index($min, $max) {
  return floor(($max - $min)/2) +$min;
}
