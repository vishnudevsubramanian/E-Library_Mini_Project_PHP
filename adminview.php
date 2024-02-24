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
  $sql2="SELECT * FROM REGISTRATION";
//echo $sql2;
  $result=mysqli_query($conn,$sql2);
  if($result->num_rows > 0)
  {
   echo "<table border=2 cellpadding=36>";
   echo "<tr>";
   echo "<td>";
   echo "FIRST_NAME";
   echo "</td>";
   echo "<td>";
   echo "LAST_NAME";
   echo "</td>";
   echo "<td>";
   echo "ADDRESS";
   echo "</td>";
   echo "<td>";
   echo "GENDER";
   echo "</td>";
   echo "<td>";
   echo "COUNTRY";
   echo "</td>";
   echo "<td>";
   echo "PHONE_NO";
   echo "</td>";
   echo "<td>";
   echo "USERNAME";
   echo "</td>";
   echo "<td>";
   echo "<center>EMAIL</center>";
   echo "</td>";
   echo "</tr>";
   while($row=mysqli_fetch_assoc($result))
   {
    echo "<tr>";
    echo "<td>";
    echo "$row[FIRST_NAME]";
    echo "</td>";
    echo "<td>";
    echo "$row[LAST_NAME]";
    echo "</td>";
    echo "<td>";
    echo "$row[ADDRESS]";
    echo "</td>";
    echo "<td>";
    echo "$row[GENDER]";
    echo "</td>";
    echo "<td>";
    echo "$row[COUNTRY]";
    echo "</td>";
    echo "<td>";
    echo "$row[PHONE_NO]";
    echo "</td>";
    echo "<td>";
    echo "$row[USERNAME]";
    echo "</td>";
    echo "<td>";
    echo "$row[EMAIL]";
    echo "</td>";
    echo "</tr>";
   } 
   echo "</table>";
  }
  else
  {
   echo "error". $sql2 ."<br>" .mysqli_error($conn);
   //echo "NO ROWS SELECTED";
  }
?>
