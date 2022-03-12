<?php

$outside;

function deleteExclamations($string = "hello!")
{
 return  str_replace(['!'],'', $string);
}

echo deleteExclamations();



