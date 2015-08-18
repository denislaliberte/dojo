<?php


function BinarySearchIterative($item, array $array) {
  if(empty($array)) { return -1; }
  $max = count($array);
  $middle = middleIndex($max);
  do {
    if($item  < $array[$middle]) { $middle = middleIndex($middle);  }
    if($item  > $array[$middle]) { return 2; }
    if($array[$middle] == $item) { return $middle; }
  }while($middle > 0);
  return -1;
}

function middleIndex($max) {
   return floor( ($max/2) );
}
