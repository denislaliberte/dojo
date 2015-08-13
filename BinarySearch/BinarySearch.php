<?php

class BinarySearch {
  const NOT_FOUND = -1;
  protected $array;
  protected $middle;
  public function __construct(array $array) {
    $this->array = $array;
    $this->middle = self::middle($array);
  }

  static public function create(array $array) {
    return new static($array);
  }

  public function search($search) {
    if(empty($this->array)) { return self::NOT_FOUND ; }
    if($this->array[$this->middle] == $search) { return $this->middle; }
    if($this->array[$this->middle] > $search) { return $this->split()->search($search); }
    if($this->array[$this->middle] < $search) {
      $upper_half_index = $this->splitUp()->search($search);
      return  ($upper_half_index == self::NOT_FOUND) ? $upper_half_index : $this->middle + 1 + $upper_half_index;
    }
    return self::NOT_FOUND;
  }

  private static function middle($array) {
    return round( (sizeof($array) -1) /2 );
  }

  public function split() {
    return new static(array_slice($this->array, 0, $this->middle));
  }

  public function splitUp() {
    return new static(array_slice($this->array,$this->middle + 1,1));
  }
}
