<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Customer Details</title>
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
}
tr:nth-child(even) {
background-color: #dddddd;
}
</style>
</head>

<body background="image/pic.jpg">
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
if (isset($_GET['cust_ic'])) {
$user = $_GET['cust_ic'];
// Create connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT cust_name, cust_ic, cust_address, cust_postcode, cust_district, cust_state, cust_email, cust_phone
FROM customer INNER JOIN product ON customer.cust_ic = product.product_id
WHERE cust_ic='$user'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
$row = mysqli_fetch_assoc($result);
$cust_name = $row['cust_name'];
$cust_ic = $row['cust_ic'];
$cust_address = $row['cust_address'];
$cust_postcode = $row['cust_postcode'];
$cust_district = $row['cust_district'];
$cust_state = $row['cust_state'];
$cust_email = $row['cust_email'];
$cust_phone = $row['cust_phone'];
} else {
echo "0 results";
}
mysqli_close($conn);
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>?cust_ic=<?php echo $cust_ic?>">
<ul>
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
<p>&nbsp;</p>
<table width="1226" height="121" border="1.0" align="center">
  <tbody>
    <tr>
      <td height="115"><form id="form1" name="form1" method="post">
        <p style="font-style: normal; font-weight: bold;"><img src="image/logo.jpeg" width="62" height="60" alt="" /></p>
        <p style="font-style: normal; font-weight: bold;">UPDATE CUSTOMER DETAILS</p>
        <p>
          <label for="textfield"><span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"><span style="text-align: center"></span></span></label>
          <label for="textfield"><span style="text-align: center">Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span></label>
          <span style="text-align: center">
            <input name="cust_name" type="text" value="<?php echo $cust_name?>" id="cust_name">
          </span></p>
        <p> <span style="text-align: center">
          <label for="textfield2">I/C Number&nbsp;&nbsp;:</label>
          &nbsp;<input name="cust_ic" type="text" value="<?php echo $cust_ic?>" id="cust_ic">
        </span></p>
        <p> <span style="text-align: center">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          Address
          <label for="textarea">:</label>
          <input name="cust_address" type="text" value="<?php echo $cust_address?>" id="cust_address">
        </span></p>
        <p>
          <label for="textfield">Postcode &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</label>
          <input name="cust_postcode" type="text" value="<?php echo $cust_postcode?>" id="cust_postcode">
        </p>
        <p>
          <label for="textfield2">District &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input name="cust_district" type="text" value="<?php echo $cust_district?>" id="cust_district">
        </p>
        <p>
          <label for="textfield4">State :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input name="cust_state" type="text" value="<?php echo $cust_state?>" id="cust_state">
        </p>
        <p> <span style="text-align: center">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="textfield4">Email : &nbsp;&nbsp;&nbsp;</label>
          <input name="cust_email" type="text" value="<?php echo $cust_email?>" id="cust_email">
        </span></p>
        <p> <span style="text-align: center">
          <label for="textfield5">Phone Number :</label>
          <input name="cust_phone" type="text" value="<?php echo $cust_phone?>" id="cust_phone">
        </span></p>
        <p> <span style="text-align: center"></br>
          </br>
          <input type="submit" name="custUpdate" value=" UPDATE "></span>  
        <p><a href="../first_grade/details_cust.php?cust_ic=<?php echo $row["cust_ic"] ?>">Back</a>
        <p>
          <?php
if (isset($_POST['custUpdate'])){
$cust_name = $_POST['cust_name'];
$cust_ic = $_POST['cust_ic'];
$cust_address = $_POST['cust_address'];
$cust_postcode = $_POST['cust_postcode'];
$cust_district = $_POST['cust_district'];
$cust_state = $_POST['cust_state'];
$cust_email = $_POST['cust_email'];
$cust_phone = $_POST['cust_phone'];

$conn = mysqli_connect("127.0.0.1", "root", "", "Employee") or die (mysql_error ());
// SQL query
$sql = "UPDATE customer SET
cust_name = '$cust_name', 
cust_ic = '$cust_ic',
cust_address = '$cust_address', 
cust_postcode = '$cust_postcode', 
cust_district = '$cust_district', 
cust_state = '$cust_state',
cust_email = '$cust_email', 
cust_phone = '$cust_phone'
WHERE cust_ic ='$cust_ic'";
// Execute the query (the recordset $rs contains the result)
if (mysqli_query($conn, $sql)) {
echo "The record of customer details is updated successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
        </p>
      </form></td>
    </tr>
  </tbody>
</body>
</html>