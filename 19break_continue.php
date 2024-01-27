<?php
  for($a=1;$a<=10;++$a){
    if($a==3) continue;
    echo $a,"\n";
  }
  for($a=1;$a<=10;++$a){
    if($a==3) break;
    echo $a,"\n";
  }
?>