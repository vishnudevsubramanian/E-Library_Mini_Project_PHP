0<html>
<head>
</head>
<body>
<table border="2">
<form action="<?php $_PHP_SELF ?>" method="POST">
<tr><td>name:</td><td><input type="text" name="name"></td></tr>
<tr><td>id:</td><td><input type="number" name="id"></td></tr>
<tr><td colspan="2"><input type="submit" name="save" value="save"></td></tr>
<tr><td colspan="2"><input type="submit" name="view" value="view"></td></tr>
<tr><td colspan="2"><input type="submit" name="update" value="update"></td></tr>
<tr><td colspan="2"><input type="submit" name="delete" value="delete"></td></tr>
</form>
</table>
</body>
</html>
<?php
$dbhost='localhost';
$dbuser='root';
$dbpass="";
$db='TASD';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if($conn->connect_error)
{
die("connection failed:" .$conn->connect_error);
}
echo "connected successfully";
$sql="CREATE  TABLE ty(name varchar(20),roll_no int)";

if(mysqli_query($conn,$sql))
{
echo"table cr";
}
else
{
echo"erroe c da:".mysqli_error($conn);
}
$mysqli_close($conn);

?>



