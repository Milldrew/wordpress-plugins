<?php

# Pass a string argument by reference and mutate it.
function functionName(&$var = null)
{
  $var .= 'hello';
}

$foo = "foo";
echo "\nbefore";
echo $foo;
functionName($foo);
echo "after";
echo $foo;
