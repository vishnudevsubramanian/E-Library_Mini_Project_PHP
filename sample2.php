<html>

<head>

</head>

<body>
 <form action="<?php $_PHP_SELF?>" method="POST">
  <table>
      <tr>

      <td>
           ID
     </td>
       <td><input type="text" name="txtid">

      </td>
     </tr>
 <tr>

    
       <td colspan="2"><input type="submit" name="show">

      </td>
     </tr>
  </table>
</form>
</body>



</html>

<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db= "EBOOK";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
if ($conn->connect_error)
 {
die("connection failed: ".$conn->connect_error);
}
echo "connected successfully";
if(isset($_POST["show"])) 
{
$sql1 = "select FILE from BOOK where ID=1";

$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_array($result1);
echo "$row1";
$image = $row1['name'];
$image_src = "upload/".$image;
echo "$image_src";


}

?>
