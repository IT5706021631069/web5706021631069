<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
   srand((double)microtime()*1000000);
for ($i=1 ; $i <= 52;$i++){
   $v = rand(0,100);
   echo $i ," : ",$v,"<br>";
}
?>
</body>
</html>
