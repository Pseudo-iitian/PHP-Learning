<?php
  // comparison have only 2 results 
  // 1- true and false;

  // == - equal to
  // === equal to and equalt type
  // != not equal to
  // <> not equal
  // !== not equal or not equal type
  // > , < , >=, <=

  $x = 3;
  $y = 2;
  // echo $x<>$y; // x and y not eq


  // <=> - spaceship operator
  // < return -1, = return 0, < return 1; , it will not check for datta type
  echo $x<=>$y;
?>