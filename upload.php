<html>
 <head>
<center>
 <title>INSERT BOOK</title>
</head>
<body bgcolor="sky blue">
<form action="<?php $_PHP_SELF?>" method="POST">
<table border="10" height="520" width="500">
<tr>
<td colspan="2"><center><b><h2>ADD BOOK<h2></b></center></td>
</tr>
 <tr><td>CATEGORY    :</td><td>  <select name="count">
    <option><--SELECT--></option>
    <option value="ACTION&ADVENTURE">ACTION&ADVENTURE</option>
    <option value="HORROR">HORROR</option>
    <option value="ROMANCE">ROMANCE</option>
    <option value="SCIENCE_FICTION">SCIENCEFICTION</option>
    <option value="IT">IT</option></td></tr>
<tr>
<td>
AUTHOR:</td><td> <input type="text" name="auth" />
</td>
</tr>
<tr>
<td>
PUBLISHED ON:</td><td> <input type="date" name="date" />
</td>
</tr>
<tr>
<td>
FILE:</td><td> <input type="file" name="file" />
</td>
</tr>
<tr>
<td colspan="2">
<center><input type="submit" name="add" value="UPLOAD"><br>
</td>
</tr>
</center>
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
//echo "connected successfully";
if(isset($_POST["add"])) 
{
$cat = $_POST["count"];
$auth= $_POST["auth"];
$date= $_POST["date"];
$file=$_POST["file"];
$sql= "INSERT INTO BOOK (CATEGORIES,AUTHOR,PUBLISHED_ON,FILE) VALUES ('$cat','$auth','$date','$file')";
if(mysqli_query($conn,$sql))
{
echo "inserted";
header("Location:sample3.php");
}
else
{
echo "failed<br>";
echo "error: ". $sql . "<br>" . mysqli_error($conn);
}
}
?>
