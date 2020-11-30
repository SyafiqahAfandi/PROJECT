<!DOCTYPE html>
<html>
<head>
<style>
	input[type=button] {
  width: 50%;
  background-color: #0E44C3;
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
    font-family: Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
    border-collapse: collapse;
    width: 80%;
    font-size: 18px;
    text-align: left;
}
td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
    font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
}
tr:nth-child(right) {
background-color: #dddddd;
}
	
	@media print
{
.noprint {display:none;}
}

@media screen
</style>
<meta charset="utf-8">
<title>Staff Details</title>
	<link rel = "icon" href ="image/logo.jpeg">
</head>
<body background="image/pic.jpg" style="text-align: center; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif;">
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
  </li>
	</div>
</ul>

<p>
  <?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Employee";
$staff_fullname = '';
$staff_email = '';	
$staff_password = '';
$staff_address = '';
$staff_postcode = '';
$staff_district = '';
$staff_state = '';
$staff_tel = '';
$staff_ic = '';
$staff_department = '';

if (isset($_GET['staff_ic'])) {
$user = $_GET['staff_ic'];
// Create connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT staff_fullname, staff_ic, staff_email, staff_password, staff_address, staff_postcode, staff_district, staff_state, staff_tel, staff_department
FROM staff_
WHERE staff_ic='$user'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
$row = mysqli_fetch_assoc($result);
$staff_fullname = $row['staff_fullname'];
$staff_email = $row['staff_email'];
$staff_ic = $row['staff_ic'];
$staff_password = $row['staff_password'];
$staff_address = $row['staff_address'];
$staff_postcode = $row['staff_postcode'];
$staff_district = $row['staff_district'];
$staff_state = $row['staff_state'];
$staff_tel = $row['staff_tel'];
$staff_department = $row['staff_department'];
} else {
echo "0 results";
}
mysqli_close($conn);
}
?>
</p>
<p><img src="image/logo.jpeg" width="60" height="62" alt=""/></p>
<p style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; text-align: center;"><strong>STAFF DETAILS</strong></p>
<table width="200" border="1" align="center">
  <tbody>
    <tr>
      <td width="21%"><strong>Name</strong></td>
	  <td><strong>:</strong></td>
      <td width="79%"><?php echo $staff_fullname?></td>
    </tr>
    <tr>
		<td><strong>IC Number</strong></td>
		<td><strong>:</strong></td>
      <td><?php echo $staff_ic?></td>
    </tr>
    <tr>
      <td><strong>Email</strong></td>
		<td><strong>:</strong></td>
      <td><?php echo $staff_email?></td>
    </tr>
    <tr>
      <td><strong>Address</strong></td>
		<td><strong>:</strong></td>
      <td><?php echo $staff_address?></td>
    </tr>
    <tr>
      <td><strong>Postcode</strong></td>
		<td><strong>:</strong></td>
      <td><?php echo $staff_postcode?></td>
    </tr>
    <tr>
      <td><strong>District</strong></td>
		<td><strong>:</strong></td>
      <td><?php echo $staff_district?></td>
    </tr>
    <tr>
      <td><strong>State</strong></td>
		<td><strong>:</strong></td>
      <td><?php echo $staff_state?></td>
    </tr>
    <tr>
      <td><strong>Phone Number</strong></td>
		<td><strong>:</strong></td>
      <td><?php echo $staff_tel?></td>
    </tr>
	  <td><strong>Department</strong></td>
		<td><strong>:</strong></td>
      <td><?php echo $staff_department?></td>
    </tr>
    <tr>
  </tbody>
</table>
<p>&nbsp;</p>
<div class="noprint">
<table width="76%" border="1" align="center">
  <tbody>
    <tr style="text-align: center">
      <td><input type="button" value="EDIT" onclick="window.location.href='staff_edit.php?staff_ic=<?php echo $row["staff_ic"] ?>'"></td>
      <td><input type="button" value="DELETE" onclick="window.location.href='staff_delete.php?staff_ic=<?php echo $row["staff_ic"] ?>'"></td>
      <td><input type="button" value="PRINT" onClick="javascript:window.print()"></td>
      <td><input type="button" value="BACK" onClick="window.location.href='staff_view_list.php'">        </br></td>
    </tr>
  </tbody>
</table>
</div>
<p>&nbsp;</p>
</body>
</html>