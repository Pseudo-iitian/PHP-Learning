<?php
// $x = 100;
// $x = 23;
// echo $x;

// $x = "hello";
// echo $x;

// define(name,value, case-insensitive);
// $x=32;
// define('x',500,true); #false by default means - we cant print it like $X it is not case insenenltive if false; (noe suppported)
// cant use dollar sign with constant variable
// constant variables are global variable

define("test",40);
// define("test",43);  redefined can't be defined again (redefined is not allowed)
// test =423; we cant change the consttants value;
echo test;

?>
