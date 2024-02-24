<html>
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
$db='SAN';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if($conn->connect_error)
{
die("connection failed:" .$conn->connect_error);
}
echo "connected successfully";
if(isset($_POST['save']))
{
$name=$_POST['name'];
$id=$_POST['id'];

$sql="INSERT INTO stu(name,id) VALUES('$name',$id)";
if(mysqli_query($conn,$sql))
{
echo "1 row inserted";
}
else
{
echo "error:" .$sql .mysqli_error($conn);
}
}
if(isset($_POST['view']))
{
$sql="SELECT name,id from stu";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
echo "<table border=2>";
echo "<tr>";
echo "<td>";
echo "name";
echo "</td>";
echo "<td>";
echo "id";
echo "</td>";
echo "</tr>";
while($row=mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>";
echo "$row[name]";
echo "</td>";
echo "<td>";
echo "$row[id]";
echo "</td>";
echo "</tr>";
}
}

else
{
echo "0 results";
}
echo "</table>";
echo "fetched data successfully";
}
if(isset($_POST['update']))
{
$name=$_POST['name'];
$id=$_POST['id'];

$sql="UPDATE stu SET name='$name' WHERE id=$id"; 
if(mysqli_query($conn,$sql))
{
echo "new row updated";
}
else
{
echo "error:" .$sql .mysqli_error($conn);
}
}
if(isset($_POST['delete']))
{
$id=$_POST['id'];
$sql="DELETE FROM stu WHERE id=$id"; 
if(mysqli_query($conn,$sql))
{
echo "row deleted ";
}
else
{
echo "error:" .$sql .mysqli_error($conn);
}
}
//mysqli_select_db($db);
//mysqli_close($conn);
?>
