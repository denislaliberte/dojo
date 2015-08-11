<?php

class BinarySearch {
  public function search($search, array $input) {
    if(empty($input)) { return -1 ; }
    if($input[0] == $search) { return 0; }
    return -1;
  }
}
