<?php

class BinarySearch {
  public function search($search, array $input) {
    if(empty($input)) { return -1 ; }
    $middle = $this->middle($input);
    if($input[$middle] == $search) { return $middle; }
    return -1;
  }

  public function middle(array $input) {
    return round( (sizeof($input) -1) /2 );
  }
}
