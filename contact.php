<html>
 <head>
  <title>registration form</title>
  <script type="text/javascript">
  function warn()
  {
   var retval=confirm("DO YOU WANT TO SAVE?");
   if(retval==true)
   { 
    return true;
   }
   else
   {
    return false;
   }
  }
 </script>
 </head>
 <body bgcolor="black">
<center><font color="white"><h1>CONTACT US</h1></center>
  <center>
  <form action="<?php $_PHP_self ?>" method="POST">
  <table border ="2" width="400" >
 <tr><td><font size="5" color="white">SUBJECT  :</td><td>  <select name="sub">
    <option><--SELECT--></option>
    <option value="GENERAL ENQUIRY">GENERAL ENQUIRY</option>
    <option value="TECNICAL ISSUE">TECNICAL ISSUE</option>
    <option value="AUTHOR ENQUIRY">AUTHOR ENQUIRY</option></td></tr>
   <tr><td><font size="5" color="white">FIRST_NAME :</td><td> <input type="text" name="fname"></td></tr>
   <tr><td><font size="5" color="white">EMAIL  :</td><td>  <input type="text" name="email"></td></tr>
  <tr><td><font size="5" color="white">PHONE_NO</td><td>  <input type="text" name="phno"></td></tr>
<tr><td><font size="5" color="white">MESSAGE   :</td><td>  <textarea rows="15" cols="20" name="mess"></textarea></td></tr>
  
   <tr><td colspan="2"><center> <input type="submit" name="save" value="SAVE" onclick="warn()"> <input type="reset" value="CLEAR"></td></tr>
  </table>
  </form>
  </center>
</body>
</html>
<?php
 $dbhost="localhost";
 $dbuser="root";
 $dbpass="";
 $db="EBOOK";
 $conn=mysqli_connect($dbhost, $dbuser, $dbpass,$db);
 if($conn->connect_error)
 {
  die("connection failed: " . $conn->connect_error);
 }
 //echo "CONNECTED SUCCESSFULLY";
if(isset($_POST["save"]))
{
 $sub=$_POST["sub"];
 $fname=$_POST["fname"];
 $email=$_POST["email"];
 $phno=$_POST["phno"];
 $mess=$_POST["mess"];
 $sql="INSERT INTO CONTACT(SUBJECT,FIRST_NAME,EMAIL,PHONE_NO,MESSAGE)VALUES ('$sub','$fname','$email',$phno,'$mess')";
 if(mysqli_query($conn,$sql))
 {
  echo"new record created successfully";
 }
 else
 {
 echo"error:".$sql."<br>".mysqli_error($conn);
 }
}

?>



