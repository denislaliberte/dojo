<?php

function BinarySearchIterative2($item, array $array) {
  if(empty($array)) return -1;
  $middle = floor(count($array) /2);
  if($item == $array[$middle]) return $middle;
  if($item == $array[0]) return 0;
  return -1;
}

