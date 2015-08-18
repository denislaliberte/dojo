<?php


function BinarySearchIterative($item, array $array) {
  if(empty($array)) { return -1; }
  $max = count($array);
  $min = 0;
  $result = -1;
  $middle = middleIndex($min,$max);
  do {
    if($item  < $array[$middle]) { $middle = middleIndex($min,$middle);  }
    if($item  > $array[$middle]) { $min = $middle; $middle = middleIndex($middle, $max); }
    if($array[$middle] == $item) { $result = $middle; }
  } while($middle > $min && $middle < $max && $array[$middle] != $item);
  return $result;
}

function middleIndex($min, $max) {
   return floor( ( ($max - $min) /2) ) + $min;
}
