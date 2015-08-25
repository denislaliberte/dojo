<?php

function fizzbuzz(array $input) {
  return array_map(
    function($a){
      if($a % 15 === 0) return 'fizzbuzz';
      if($a % 5 === 0) return 'buzz';
      if($a % 3 === 0) return 'fizz';
      return $a;
    },
    $input
  );
}
