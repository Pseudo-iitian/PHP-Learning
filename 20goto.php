<?php
  for($a=1;$a<=10;++$a){
    if($a==5){
      goto abc;
    }
    echo $a,"\n";
  }
  // echo "hello";
  abc:
  echo "This is new code";
?>