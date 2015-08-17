<?php


function BinarySearchIterative($item, array $array) {
  if(empty($array)) { return -1; }
  if($array[0] == $item) { return 0; }
  return -1;
}

