<?php
  $name = "Harshita Verma";
  $gender = "female";

  // if($gender==="male"){
  //   echo "Hello Mr. ".$name;
  // }
  // else{
  //   echo "Hello Miss. ", $name;
  // }

  // if($gender === "male"){
  //   echo "mard ho tmm";
  // }
  // else if($gender==="female"){
  //   echo "ladki ho tmm";
  // }
  // else{
  //   echo "chakke ho tmm";
  // }
  if($gender === "male"):
    echo "mard ho tmm";
  elseif($gender==="female"):
    echo "ladki ho tmm";
  else:
    echo "chakke ho tmm";
  endif;


  
?>