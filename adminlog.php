
<html>
 <head>
  <title>login</title>
 </head>
 <body bgcolor="black"><center>
  <form action="<?php $_PHP_self ?>" method="POST">
  <table border="2">
  <tr><td><font size="5" color="white">USERNAME :</td><td><input type="text" name="user"></td></tr><br>
  <tr><td><font size="5" color="white">PASSWORD :</td><td><input type="password" name="pass"></td></tr><br>
  <tr><td colspan="2"><center><input type="submit" value="LOGIN" name="login"></center></td></tr>
  </table>
  <form>
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
if(isset($_POST["login"]))
{
 $user=$_POST["user"];
 $pass=$_POST["pass"];
 $sql2="SELECT PASSWORD,USERNAME FROM ADMIN WHERE USERNAME='$user'";
//echo $sql2;
 $result=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result))
{
$pas=$row["PASSWORD"];
$use=$row["USERNAME"];
}
}
else
{
 //echo "0 results";
//echo "incorrect password";
$pas="";
$use="";
}
 if($pass==$pas && $user==$use)
{
header("Location:adminpage.php");
}
else
{
echo "incorrect password";
}
}
?>
