<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Customer Details</title>
	<link rel = "icon"  href = "image/logo.jpeg">
<style type="text/css">
body,td,th {
    font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
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
}
input[type=button] {
  width: 50%;
  background-color: #E00000;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=button]:hover {
  background-color: #131313;
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
	  
    </div>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Agent</a>
    <div class="dropdown-content">
      <a href="view_agent.php">List of Agent</a>
     
    </div>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Profile</a>
    <div class="dropdown-content">
		<a href="update.php">Update</a>
	</div>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Product</a>
    <div class="dropdown-content">
		<a href="view_product.php">List of Product</a>
		
    </div>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Courier</a>
    <div class="dropdown-content">
     <a href="courier_view.php">List Of Tracking Number</a>
	
	</div>
	  
	  <li style="float:right"><a href="choose.php">Log Out</a></li>
</div>
  </li>
</ul>
<p>
<?php
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "Employee";
	$cust_name = '';
	$cust_ic = '';
	$cust_address = '';
	$cust_postcode = '';
	$cust_district = '';
	$cust_state = '';
	$cust_email = '';
	$cust_phone = '';
	$product_name = '';
	
	if (isset($_GET['cust_ic'])) {
	$user = $_GET['cust_ic'];
	$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "SELECT cust_name, cust_ic, cust_address, cust_postcode, cust_district, cust_state, cust_email, cust_phone, product_name FROM customer INNER JOIN product ON customer.cust_ic = product.product_id WHERE cust_ic='$user'";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
			$row  = mysqli_fetch_assoc ($result);
			$cust_name = $row['cust_name'];
			$cust_ic = $row['cust_ic'];
			$cust_address = $row['cust_address'];
			$cust_postcode = $row['cust_postcode'];
			$cust_district = $row['cust_district'];
			$cust_state = $row['cust_state'];
			$cust_email = $row['cust_email'];
			$cust_phone = $row['cust_phone'];
			$product_name = $row['product_name'];
			
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
        <p style="font-style: normal; font-weight: bold;"><img src="image/logo.jpeg" width="62" height="60" alt="" /></p>
        <p style="font-style: normal; font-weight: bold;"> CUSTOMER DETAILS</p>
        <table width="80%" height="383" border="0.5" align="center">
          <tbody>
            <tr>
              <td width="30%" style="text-align: left" scope="col"><strong> NAME</strong></td>
              <td width="70%" style="text-align: left"><?php echo $cust_name?></td>
            </tr>
            <tr>
              <td style="text-align: left"><strong>IC NUMBER</strong></td>
              <td style="text-align: left"><?php echo $cust_ic?></td>
            </tr>
            <tr>
              <td style="text-align: left"><strong>ADDRESS</strong></td>
              <td style="text-align: left"><?php echo $cust_address?></td>
            </tr>
            <tr>
              <td style="text-align: left"><strong>POSTCODE</strong></td>
              <td style="text-align: left"><?php echo $cust_postcode?></td>
            </tr>
            <tr>
              <td style="text-align: left"><strong>DISTRICT</strong></td>
              <td style="text-align: left"><?php echo $cust_district?></td>
            </tr>
			<tr>
              <td style="text-align: left"><strong>STATE</strong></td>
              <td style="text-align: left"><?php echo $cust_state?></td>
            </tr>
			  <tr>
              <td style="text-align: left"><strong>EMAIL</strong></td>
              <td style="text-align: left"><?php echo $cust_email?></td>
            </tr>
			  <tr>
              <td style="text-align: left"><strong>PHONE NUMBER</strong></td>
              <td style="text-align: left"><?php echo $cust_phone?></td>
            </tr>
			 <tr>
              <td style="text-align: left"><strong>PRODUCT</strong></td>
              <td style="text-align: left"><?php echo $product_name?></td>
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
        <td><a href="../first_grade/edit_cust.php?cust_ic=<?php echo $row["cust_ic"] ?>">Edit</a></td>
        <td><a href="../first_grade/delete_cust.php?cust_ic=<?php echo $row["cust_ic"] ?>">Delete</a></td>
		  <td><a href="javascript:window.print()">Print</a></td>
		  <td><a href="../first_grade/view_cust.php?cust_ic=<?php echo $row["cust_ic"] ?>">Back</a></td>
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
</body>