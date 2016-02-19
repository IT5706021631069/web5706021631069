<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
  <table width="80%" align="center" border="1">
<?php

for ($i=1 ; $i <= 13 ;$i++){

  echo "<tr>";
  for ($c=1 ; $c <= 4 ;$c++){
    //for($ch
   $v[$c] = rand(0,100);
   echo "<td><center> $v[$c] </center></td>" ;
 }
 echo " </tr> " ;
 }
 ?>
</table>
</body>
</html>
