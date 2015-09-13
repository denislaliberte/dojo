<?php

function romannumber($input) {
  $numbers = array(
    'I' =>1,
    'X' =>10,
  );
  return $numbers[$input];
}
