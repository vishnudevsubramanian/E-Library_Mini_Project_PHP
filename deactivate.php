<html>
 <head>
  <title>registration form</title>
 </head>
 <body>
  <center><br><br><br><br>
  <form action="<?php $_POST_SELF ?>" method="POST"> 
   <table border="2">
   <tr><td>ENTER USERNAME:</td><td><input type="text" name="user"></td></tr>
   <tr><td colspan="2"><center><input type="submit" name="delete" value="DEACTIVATE" onclick="return confirm('ARE YOU SURE WANT TO DEACTIVATE')"></center></td></tr>
   </table>
  </form>
  </center>
 </body>
<html>
<?php
 $dbhost="localhost";
 $dbuser="root";
 $dbpass="";
 $db="EBOOK";
 $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
 if($conn->connect_error)
 {
  die("CONNECTION FAILED : ".$conn->$connect_error);
 }
 //echo "CONNECTED SUCESSFULLY";
 if(isset($_POST["delete"]))
 {
  $user=$_POST["user"];
  $sql2="DELETE FROM REGISTRATION WHERE USERNAME='$user'";
  if(mysqli_query($conn, $sql2))
  {
   echo "ACCOUNT REMOVED SUCCESFULLY";
  }
  else
  {
   echo "error". $sql2 ."<br>" .mysqli_error($conn);
  }
 }
?>
