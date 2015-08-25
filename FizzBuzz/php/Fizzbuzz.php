<?php

function fizzbuzz(array $input) {
  return array_map(
    function($a){
      if($a % 3 === 0) return 'fizz';
      if($a % 5 === 0) return 'buzz';
      return $a;
    }, 
    $input
  );
}
