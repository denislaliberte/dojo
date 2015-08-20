<?php

function BinarySearchIterative2($item, array $array) {
  if(empty($array)) return -1;
  $max = count($array);
  $min = 0;
  while($max > $min) {
    $middle = floor(($max - $min)/2);
    if($item == $array[$middle]) return $middle;
    $max = $middle;
  }
  return -1;
}

