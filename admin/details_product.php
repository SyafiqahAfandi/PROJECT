<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Products Detail</title>
	<link rel = "icon" href = "image/logo.jpeg">
<style type="text/css">
body,td,th {
    font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
    text-align: center;
}
	ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
    float: left;
    font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}
	

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
	table {
font-family: arial, sans-serif;
border-collapse: collapse;
width: 80%;
}
td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
    font-family: arial, sans-serif;
    font-style: normal;
    font-weight: normal;
}
tr:nth-child(even) {
background-color: #dddddd;
}
	@media print
{
.noprint {display:none;}
}
input[type=button]:hover {
  background-color: Green;
}
@media screen


</style>
</head>

<body background="image/pic.jpg">
<ul>
	<div class="noprint">
    <li><a href="home.php">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Staff</a>
    <div class="dropdown-content">
      <a href="staff_view_list.php">List of Staff</a>
	  <a href=staff_register.php>Add New Staff</a>
    </div>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Agent</a>
    <div class="dropdown-content">
      <a href="view_agent.php">List of Agent</a>
      <a href="add_agent.php">Add New Agent</a>
    </div>
  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Product</a>
    <div class="dropdown-content">
		<a href="view_product.php">List of Product</a>
		<a href="add_product.php">Add New Product</a>
    </div>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Courier</a>
    <div class="dropdown-content">
     <a href="courier_view.php">List Of Tracking Number</a>
	 <a href="courier_add.php">Add New Courier</a>
	</div>
	  
	  <li style="float:right"><a href="choose.php">Log Out</a></li>
</div>
	</li></div>
</ul>

<p>
<?php
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "Employee";
	$product_id = '';
	$product_name = '';
	$product_price = '';
	$product_qty = '';
	$product_comment = '';
	$total ='';
	
	if (isset($_GET['product_id'])) {
	$user = $_GET['product_id'];
	$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "SELECT product_id, product_name, product_price, product_qty, product_comment,total FROM product WHERE product_id='$user'";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
			$row  = mysqli_fetch_assoc ($result);
			$product_id = $row['product_id'];
			$product_name = $row['product_name'];
			$product_price = $row['product_price'];
			$product_qty = $row['product_qty'];
			$product_comment = $row['product_comment'];
			$total = $row['total'];
		
			} else {
				echo "0 results";
			}
				mysqli_close($conn);
	}
	?>
</p>
	</div>
<table width="1226" height="121" border="1.0" align="center">
  <tbody>
    <tr>
      <td height="115"><form id="form1" name="form1" method="post">
        <p>&nbsp;</p>
        <p style="font-style: normal; font-weight: bold;"><img src="image/logo.jpeg"width="62" height="60" alt="" /></p>
        <p style="font-style: normal; font-weight: bold;"> PRODUCT DETAILS</p>
        <table width="80%" height="383" border="0.5" align="center">
          <tbody>
            <tr>
              <td width="30%" style="text-align: left" scope="col"><strong> ID </strong></td>
              <td width="70%" style="text-align: left"><?php echo $product_id?></td>
            </tr>
            <tr>
              <td style="text-align: left"><strong>PRODUCT NAME</strong></td>
              <td style="text-align: left"><?php echo $product_name?></td>
            </tr>
            <tr>
              <td style="text-align: left"><strong>PRICE (RM)</strong></td>
              <td style="text-align: left"><?php echo $product_price?></td>
            </tr>
            <tr>
              <td style="text-align: left"><strong>QUANTITY</strong></td>
              <td style="text-align: left"><?php echo $product_qty?></td>
            </tr>
            <tr>
              <td style="text-align: left"><strong>COMMENT</strong></td>
              <td style="text-align: left"><?php echo $product_comment?></td>
            </tr>
			  <tr>
              <td style="text-align: left"><strong>TOTAL</strong></td>
              <td style="text-align: left"><?php echo $total?></td>
            </tr>
          </tbody>
        </table>
		  
         <p style="font-style: normal; font-weight: bold; text-align: left;">&nbsp;</p>
        <p style="font-style: normal; font-weight: bold; text-align: left;">&nbsp;</p>
        <p style="font-style: normal; font-weight: bold; text-align: left;">&nbsp;</p>
		  <div class="noprint">
		  <table width="200" border="0.5" align="center">
    <tbody>
      <tr style="text-align: center; font-weight: normal; font-style: normal;">
        <td><p>
            <input type="button" value="EDIT" onclick="window.location.href='edit_product.php?product_id=<?php echo $row["product_id"] ?>'" />
			</p></td>
        <td><p>
            <input type="button" value="DELETE" onclick="window.location.href='delete_product.php?product_id=<?php echo $row["product_id"] ?>'" />
			</p></td>
		  <td><p>
            <input type="button" value="PRINT" onclick="window.location.href='javascript:window.print()'" />
		  <td><p>
            <input type="button" value="BACK" onclick="window.location.href='view_product.php?product_id=<?php echo $row["product_id"] ?>'" />
			</p></td>
      </tr>
    </tbody>
  </table>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
      </form></td>
    </tr>
  </tbody>
</table>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>
</div>