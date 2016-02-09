<html>
  <head>
    <meta charset="utf-8">
    <title> summation </title>
  </head>
  <body>
    <?php
    $name=$_POST['name'];
    $nic=$_POST['nic'];
    $age=$_POST['age'];
    $day=$_POST['day'];
    //$province=$_POST['province'];
    $sex=$_POST['sex'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $univ=$_POST['univ'];
    $loc=$_POST['loc'];
    $hob=$_POST['hob'];
    ?>
    <table width="50%" border="5" align="center" cellspacing="5" bordercolor="#000000" bgcolor="#610002">
    <tr>
      <td colspan="2" align="center" bgcolor="#999999">
        <?php
        echo "<p>";
        echo "<b> USER DATA </b><br/>";
        ?></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><?php
    echo "Name :: <i> $name </i><i> ($nic) </i><br/>";
    ?></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><?php
    if($age>="1"&&$age<="100") echo "Age :: <i> $age </i><br/>";
    else echo " Age :: ERROR!!!! </i><br/>";
    ?></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><?php
    echo "Brithday :: <i> $day </i><br/>";
    //echo "Brithday :: <i> $day </i><i> $province </i><br/>";
    ?></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><?php
    if($sex ==  "1") echo("Sex :: ชาย <br/>");
    if($sex ==  "0") echo("Sex :: หญิง <br/>");
      ?></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><?php
    echo "Number Phone :: <i> $phone </i><br/>";
      ?></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><?php
    echo "Email :: <i> $email </i><br/>";
      ?></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><?php
    echo "University :: <i> $univ </i><br/>";
    ?></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><?php
    echo "Location :: <i> $loc </i><br/>";
      ?></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><?php
    echo "Hobby :: <i> $hob </i><br/>";
     ?></td>
     <tr>
     </table>
  </body>
</html>
