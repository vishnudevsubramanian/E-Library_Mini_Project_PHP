<html>
 <head>
  <title>registration form</title>
 </head>
 <body bgcolor="black">
<center><font color="white"><h1>REGISTRATION FORM</h1></center>
  <center>
  <form action="<?php $_PHP_self ?>" method="POST">
  <table border ="2" width="400" >
   <tr><td><font size="5" color="white">FIRST NAME :</td><td> <input type="text" name="fname"></td></tr>
   <tr><td><font size="5" color="white">LAST NAME  :</td><td>  <input type="text" name="lname"></td></tr>
   <tr><td><font size="5" color="white">ADDRESS    :</td><td>  <textarea rows="2" cols="20" name=add></textarea></td></tr>
   <tr><td><font size="5" color="white">GENDER     :</td><td> <font color="white"> MALE<input type="radio" name="gen" value="m" >FEMALE<input type="radio" name="gen" value="f"></font></td></tr>
   <tr><td><font size="5" color="white">COUNTRY    :</td><td>  <select name="count">
    <option><--SELECT--></option>
    <option value="INDIA">INDIA</option>
    <option value="JAPAN">JAPAN</option>
    <option value="THAILAND">THAILAND</option>
    <option value="AUSTRALIA">AUSTRALIA</option>
    <option value="CHILI">CHILI</option>  </select></td></tr>
   <tr><td><font size="5" color="white">PHONE      :</td><td>  <input type="number" name="phno"></td></td>
  <tr><td><font size="5" color="white">USERNAME : </td><td> <input type="text" name="user"></td></tr><br>
  <tr><td><font size="5" color="white">SET PASSWORD :</td><td>  <input type="password" name="pass"></td></tr><br>
  <tr><td><font size="5" color="white">CONFIRM PASSWORD :</td><td>  <input type="password" name="repass"></td></tr><br>
 <tr><td><font size="5" color="white">EMAIL :</td><td>  <input type="text" name="email"></td></tr><br>
   <tr><td colspan="2"><center> <input type="submit" name="save" value="SAVE" onclick="return confirm('ARE YOU SURE WANT TO SAVE')"> <input type="reset" value="CLEAR"></td></tr>
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
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if($conn->connect_error)
{
 die("CONNECTION FAILED:".$conn->connect_error);
}
//echo "CONNECTED SUCCESSFULLY";

 if(isset($_POST["save"]))
{
 
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$add=$_POST["add"];
$gen=$_POST["gen"];
$count=$_POST["count"];
$phno=$_POST["phno"];
$user=$_POST["user"];
$pass=$_POST["pass"];
$repass=$_POST["repass"];
$email=$_POST["email"];
if($_POST["pass"] == $_POST["repass"])
{
 $sql="INSERT INTO REGISTRATION(FIRST_NAME,LAST_NAME,ADDRESS,GENDER,COUNTRY,PHONE_NO,USERNAME,PASSWORD,RE_PASSWORD,EMAIL) VALUES('$fname','$lname','$add','$gen','$count',$phno,'$user','$pass','$repass','$email')";
 if(mysqli_query($conn,$sql))
 {
  echo"new record created successfully";
 }
 else
 {
 echo"error:".$sql."<br>".mysqli_error($conn);
 }
 header("Location:sample.php");
}
else
{
 echo"PASSWORD MISS MATCH";
}
}
?>
