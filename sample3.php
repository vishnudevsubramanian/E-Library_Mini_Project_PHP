
<html>

<table width="80%" border="1">
    <tr>
    <td>CATEGORY</td>
    <td>AUTHOR</td>
    <td>FILE TYPE</td>
    <td>View</td>
    </tr>
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



 
 $sql="SELECT * FROM BOOK";
 $result_set = mysqli_query($conn,$sql);
 while($row = mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['CATEGORIES'] ?></td>
        <td><?php echo $row['AUTHOR'] ?></td>
        <td><?php echo $row['FILE'] ?></td>
        <!--<td><a href="uploads/<?php echo $row['FILE'] ?>" target="_blank">view file</a></td>-->
        <td><a href="<?php echo $row['FILE'] ?>" target="_blank">view file</a></td> 
        </tr>
        <?php
 }
 ?>
</table>

</html>
