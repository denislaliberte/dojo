<?php


function BinarySearchIterative($item, array $array) {
  if(empty($array)) { return -1; }
  $middle = middleIndex($array);
  if($array[$middle] == $item) { return $middle; }
  return -1;
}

function middleIndex(array $array) {
   return floor(count($array) /2);
}
