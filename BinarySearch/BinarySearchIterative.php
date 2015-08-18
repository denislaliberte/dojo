<?php


function BinarySearchIterative($item, array $array) {
  if(empty($array)) { return -1; }
  $middle = middleIndex($array);
  do {
    if($item  < $array[$middle]) { $middle = floor($middle /2);  }
    if($item  > $array[$middle]) { return 2; }
    if($array[$middle] == $item) { return $middle; }
  }while($middle > 0);
  return -1;
}

function middleIndex(array $array) {
   return floor(count($array) /2);
}
