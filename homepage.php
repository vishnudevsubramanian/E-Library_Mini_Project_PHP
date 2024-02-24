<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
.show1 {display: block;}

</style>
</head>
<body  bgcolor="black">
<center><img src="book1.png"></center>

<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">CATEGORIES</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="action.php">ACTION&ADVENTURE</a>
   <a href="horror.php">HORROR</a>
    <a href="romance.php">ROMANCE</a>
    <a href="scific.php">SCIENCE-FICTION</a>
    <a href="it.php">IT</a>
  </div>


<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">MY ACCOUNT</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="action.php">VIEWMYACCOUNT</a>
   <a href="">LOGOUT</a>
  </div>
</div>
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">MY ACCOUNT</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="action.php">VIEWMYACCOUNT</a>
   <a href="">LOGOUT</a>
  </div>
</div>


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}





// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}



</script>
<br><br><br><br><br><table cellpadding="55">
<tr><td><a href="1.pdf"><img src="7.jpg" align="middle" height="250" width="190"></a></td>
<td><a href="pdf2.pdf"><img src="pdf2.png" align="middle" height="250" width="190"></a></td>
<td><a href="3.pdf" ><img src="3.png" align="middle" height="250"width="190"></a></td>
<td><a href="4.pdf" ><img src="4.png" align="middle" height="250" width="190"></a></td>
</tr>

<tr><td><a href="adv2.pdf"><img src="adv2.png" align="middle" height="250" width="190"></a></td>
<td><a href="h1.pdf"><img src="h1.png" align="middle" height="250" width="190"></a></td>
<td><a href="adv10.pdf" ><img src="adv10.png" align="middle" height="250"width="190"></a></td>
<td><a href="h3.pdf" ><img src="h3.png" align="middle" height="250" width="190"></a></td>
</tr>

<tr><td><a href="adv5.pdf"><img src="adv5.png" align="middle" height="250" width="190"></a></td>
<td><a href="r3.pdf"><img src="r3.png" align="middle" height="250" width="190"></a></td>
<td><a href="h6.pdf" ><img src="h6.png" align="middle" height="250"width="190"></a></td>
<td><a href="r4.pdf" ><img src="r4.png" align="middle" height="250" width="190"></a></td>
</tr>

<tr><td><a href="12.pdf"><img src="12.png" align="middle" height="250" width="190"></a></td>
<td><a href="h5.pdf"><img src="h5.png" align="middle" height="250" width="190"></a></td>
<td><a href="adv8.pdf" ><img src="adv8.png" align="middle" height="250"width="190"></a></td>
<td><a href="5.pdf" ><img src="5.jpg" align="middle" height="250" width="190"></a></td></tr>


<tr><td><a href="6.pdf" ><img src="6.png"align="right" height="250" width="190"></a></td>
<td><a href="8.pdf" ><img src="8.png"align="right" height="250" width="190"></a></td>
<td><a href="9.pdf" ><img src="9.png"align="right" height="250" width="190"></a></td>
<td><a href="11.pdf" ><img src="11.png"align="right" height="250" width="190"></a></td>
</tr></table> 
</body>
</html>
