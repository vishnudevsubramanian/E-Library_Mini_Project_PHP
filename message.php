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
 $sql2="SELECT * FROM CONTACT";
 $result=mysqli_query($conn,$sql2);
  if($result->num_rows > 0)
  {
   echo "<table border=2 cellpadding=50";
   echo "<tr>";
   echo "<td>";
   echo "SUBJECT";
   echo "</td>";
   echo "<td>";
   echo "FIRST_NAME";
   echo "</td>";
   echo "<td>";
   echo "E_mail";
   echo "</td>";
   echo "<td>";
   echo "PHONE_NO";
   echo "</td>";
   echo "<td>";
   echo "MESSAGE";
   echo "</td>";
   echo "<td>";
   echo "DATE";
   echo "</td>";
   echo "</tr>";
   while($row=mysqli_fetch_assoc($result))
   {
    echo "<tr>";
    echo "<td>";
    echo "$row[SUBJECT]";
    echo "</td>";
    echo "<td>";
    echo "$row[FIRST_NAME]";
    echo "</td>";
    echo "<td>";
    echo "$row[EMAIL]";
    echo "</td>";
    echo "<td>";
    echo "$row[PHONE_NO]";
    echo "</td>";
    echo "<td>";
    echo "$row[MESSAGE]";
    echo "</td>";
    echo "<td>";
    echo "$row[DATE]";
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
