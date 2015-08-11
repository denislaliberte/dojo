<?php

class BinarySearch {
  private $array;
  public function __construct(array $array) {
    $this->array = $array;
  }

  static public function create(array $array) {
    return new self($array);
  }

  public function search($search) {
    if(empty($this->array)) { return -1 ; }
    if($this->array[$this->middle()] == $search) { return $this->middle(); }
    if($this->array[$this->middle()] > $search) { return 0; }
    return -1;
  }

  public function middle() {
    return round( (sizeof($this->array) -1) /2 );
  }

  public function split() {
    return array_slice($this->array, 0, $this->middle());
  }
}
