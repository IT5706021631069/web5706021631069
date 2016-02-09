<html>
  <head>
    <meta charset="utf-8">
    <title> การสร้างฟอร์มในการรับค่า </title>
    <style>
    	h1{font:bold 36px Vardana;color:black;}
   		h2{font:bold 18px Vardana;color:white;}
		h3{font:14px Vardana;color:white;}
    </style>
  </head>
  <body>
    <form method="post" action="lab5-9cal.php">
      <table width="50%" border="5" align="center" cellspacing="5" bordercolor="#000000" bgcolor="#610002">
        <tr>
          <td colspan="2" align="center" bgcolor="#999999">
          <big><h1> Profile </h1></big>
        </td></tr>
        <tr>
          <td><h2> Enter Name :: </h2></td>
          <td bgcolor="#453A3A"><input type="text" name="name" size="25" value=""/></td>
        </tr>
        <tr>
          <td><h2> Enter Nick name :: </h2></td>
          <td><input type="text" name="nic" size="25" value=""/></td>
        </tr>
        <tr>
          <td><h2> Enter age :: </h2></td>
          <td><input type="number" min=1 max=100 name="age" value=""/></td>
        </tr>
        <tr>
          <td><h2> Enter Brithday (dd/mm/yyyy):: </h2></td>
          <td><input type="date" name="day"  value=""/>
           <!--<SELECT NAME="province" SIZE="1">
               <OPTION VALUE="มกราคม">มกราคม</OPTION>
               <OPTION VALUE="กุมภาพันธ์">กุมภาพันธ์</OPTION>
               <OPTION VALUE="มีนาคม">มีนาคม</OPTION>
               <OPTION VALUE="เมษายน">เมษายน</OPTION>
               <OPTION VALUE="พฤษภาคม">พฤษภาคม</OPTION>
               <OPTION VALUE="มิถุนายน">มิถุนายน</OPTION>
               <OPTION VALUE="กรกฎาคม">กรกฎาคม</OPTION>
               <OPTION VALUE="สิงหาคม">สิงหาคม</OPTION>
               <OPTION VALUE="กันยายน">กันยายน</OPTION>
               <OPTION VALUE="ตุลาคม">ตุลาคม</OPTION>
               <OPTION VALUE="พฤศจิกายน">พฤศจิกายน</OPTION>
               <OPTION VALUE="ธันวาคม">ธันวาคม</OPTION>
         </SELECT>--></td>
        </tr>
        <tr>
          <td><h2> Enter sex :: </h2></td>
          <td><h3><input type="radio" name="sex" value="1"> Male <br>
          <input type="radio" name="sex" value="0"> Female <br></h3>
        </td>
        </tr>
        <tr>
          <td><h2> Enter Number phone :: </h2></td>
          <td><input type="text" maxlength="10"length name="phone" size="25" value=""/> </td>
        </tr>
        <tr>
          <td><h2> Enter Email :: </h2></td>
          <td><input type="Email" name="email" size="25" value=""/> </td>
        </tr>
        <tr>
          <td><h2> University :: </h2></td>
          <td><input type="text" name="univ" size="25" value=""/> </td>
        </tr>
        <tr>
          <td><h2> location :: </h2></td>
          <td><input type="text" name="loc" size="25" value=""/> </td>
        </tr>
        <tr>
          <td><h2> Hobby :: </h2></td>
          <td><textarea name="hob" cols="50" rows="5" wrap="virtual"></textarea ></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
              <input type="submit" value="   OK   "/>
              <input type="reset" value="   Clear   "/>
            </td>
        </tr>
        </table>
      </form>
  </body>
</html>
