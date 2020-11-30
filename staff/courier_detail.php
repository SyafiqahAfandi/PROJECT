<!doctype html>
<html>
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
	
<head>
<meta charset="utf-8">
<title>DETAILS OF COURIER</title>
	<link rel = "icon"  href = "image/logo.jpeg">
</head>

<body style="text-align: center" background="image/pic.jpg">
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
	</li></div>
</ul>	

<p>
  <span style="text-align: center">
  <?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Employee";

$courier_name = '';
$courier_consignmentNo = '';
$courier_date_delivery = '';	
$courier_date_received = '';
$courier_receiver = '';
$courier_receiverIC = '';
$courier_phoneReceive = '';
$courier_personIncharge = '';
$courier_phoneSender = '';


if (isset($_GET['courier_consignmentNo'])) {
$user = $_GET['courier_consignmentNo'];
// Create connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT courier_name, courier_consignmentNo, courier_date_delivery, courier_date_received, courier_receiver, courier_receiverIC, courier_phoneReceive, courier_personIncharge, courier_phoneSender
FROM courier
WHERE courier_consignmentNo='$user'";
	
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
$row = mysqli_fetch_assoc($result);
	
$courier_name = $row['courier_name'];
$courier_consignmentNo = $row['courier_consignmentNo'];
$courier_date_delivery = $row['courier_date_delivery'];	
$courier_date_received = $row['courier_date_received'];
$courier_receiver = $row['courier_receiver'];
$courier_receiverIC = $row['courier_receiverIC'];
$courier_phoneReceive = $row['courier_phoneReceive'];
$courier_personIncharge = $row['courier_personIncharge'];
$courier_phoneSender = $row['courier_phoneSender'];
	
} else {
echo "0 results";
}
mysqli_close($conn);
}
?>
  </span>
	<form>
<p><img src="image/logo.jpeg" width="62" height="60" alt=""/>
<p style="text-align: center; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;"><strong>COURIER DETAILS</strong></p>
<table width="200" border="1" align="center">
  <tbody>
    <tr>
      <td width="21%"><strong>Courier Name</strong></td>
	  <td><strong>:</strong></td>
      <td width="79%"><?php echo $courier_name?></td>
    </tr>
    <tr>
      <td><strong>Consignment Number</strong></td>
		<td><strong>:</strong></td>
      <td><?php echo $courier_consignmentNo?></td>
    </tr>
    <tr>
		<td><p><strong>Date of Delivery</strong></p></td>
		<td><strong>:</strong></td>
      <td><?php echo $courier_date_delivery?></td>
    </tr>
    <tr>
      <td><strong>Date of Received</strong></td>
		<td><strong>:</strong></td>
      <td><?php echo $courier_date_received?></td>
		
    </tr>
    <tr>
      <td><strong>Receiver Name</strong></td>
		<td><strong>:</strong></td>
      <td><?php echo $courier_receiver?></td>
    </tr>
    <tr>
      <td><strong>Receiver Identification Number</strong></td>
		<td><strong>:</strong></td>
      <td><?php echo $courier_receiverIC?></td>
    </tr>
    <tr>
      <td><strong>Phone Number</strong></td>
		<td><strong>:</strong></td>
      <td><?php echo $courier_phoneReceive?></td>
    </tr>
    <tr>
      <td><strong>Person Incharge</strong></td>
		<td><strong>:</strong></td>
      <td><?php echo $courier_personIncharge?></td>
    </tr>
    <tr>
      <td><p><strong>Contact No</strong>.</p>
        <p><strong>(Person Incharge)</strong></p></td>
		<td><strong>:</strong></td>
      <td><?php echo $courier_phoneSender?></td>
    </tr>
	  </tbody>
</table></form>

<p>&nbsp;</p>
<div class="noprint">
<table width="76%" border="1" align="center">
  <tbody>
    <tr style="text-align: center">
      <td><input type="button" value="EDIT" onclick="window.location.href='courier_edit.php?courier_consignmentNo=<?php echo $row["courier_consignmentNo"] ?>'"></td>
      <td><input type="button" value="PRINT" onClick="javascript:window.print()"></td>
      <td><input type="button" value="BACK" onClick="window.location.href='courier_view.php'">        </br></td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>