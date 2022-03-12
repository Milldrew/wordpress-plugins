<?php
function reduce_array( $stringed_numbers = ["1"])
{
  function sum_strings($sum, $current_item)
  {
    return $sum + $current_item ;
  }
  
  return array_reduce($stringed_numbers, "sum_strings");
}


$array_of_stringed_numbers = ['1', '2' ,"10"];
echo reduce_array($array_of_stringed_numbers);
