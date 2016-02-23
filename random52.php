<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
  <table width="80%" align="center" border="1">
<?php
$cout = 52;
$co = 0;
/////////////////////////////////////
for ($i=1 ; $i <= 13 ;$i++){
 echo "<tr>";
  for ($c=1 ; $c <= 4 ;$c++){
/////////////////////////////////////////////////
$datas[$co] = rand(1,$cout);
$r=0;
while($r<$co)
{
  if ($datas[$co] == $datas[$r])
  {
    $datas[$co] = rand(1,$cout);
    $r = 0;
  }
  else{
    $r++;
  }
}
///////////////////////////////////////////////
 echo "<td><center>$datas[$co]</center></td>" ;
 $co++;
 }
 echo " </tr> " ;
 }
 ?>
</table>
</body>
</html>
