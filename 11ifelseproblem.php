<?php

  $per = 44;
  if($per>=80 && $per<=100){
    echo "merit";
  }
  else if($per>=60 && $per<80){
    echo "1st division";
  }
  else if($per>=45 && $per<60){
    echo "2nd division";
  }
  else if($per>=33 && $per<45){
    echo "3rd division";
  }
  else if($per<33){
    echo "fail";
  }
  else echo "please enter valid percentage";
?>