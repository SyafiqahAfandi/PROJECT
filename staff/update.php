<!doctype html>
<html>
<head>
<style>
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
    font-family: "Cambria", "Hoefler Text", "Liberation Serif", "Times", "Times New Roman", serif;
}
tr:nth-child(even) {
background-color: #dddddd;
}
input[type=button1] {
  width: 5%;
  background-color: #000000;
  color: white;
  padding: 14px 5px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
		text-align:center; 
}

input[type=button1]:hover {
  background-color: dimgrey;
}
</style>
<meta charset="utf-8">
<title>Update Staff</title>
	<link rel = "icon" href ="image/logo.jpeg">
</head>

<body style="text-align: center" background="image/pic.jpg">
<ul>
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
		<a href="courier_add.php">Add New Courier</a></div>
	  
  <li style="float:right"><a href="choose.php">Log Out</a></li>
</div>
  </li>
</ul>

<p><span style="text-align: center"></span>
  
  <?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Employee";

$staff_fullname = '';
$staff_email = '';
$staff_ic = '';	
$staff_password = '';
$staff_address = '';
$staff_postcode = '';
$staff_district = '';
$staff_state = '';
$staff_tel = '';
$staff_department = '';

if (isset($_GET['staff_ic'])) {
$user = $_GET['staff_ic'];
// Cre ate connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT staff_fullname,  staff_email, staff_ic, staff_password, staff_address, staff_postcode, staff_district, staff_state, staff_tel, staff_department
FROM staff_ WHERE staff_ic='$user'";
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
<p>&nbsp; </p>
<table width="200" border="1" align="center">
  <tbody>
    <tr>
      <td height="162">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>?staff_username=<?php echo $staff_username?>">
  <p><img src="image/logo.jpeg" width="62" height="60" alt=""/>
	  <p style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; text-align: center;"><strong>UPDATE OF STAFF DETAILS</strong></p>
    <label for="textfield2"><span style="text-align: center">Fullname:</span></label>
    <span style="text-align: center">
    <input type="text" name="staff_fullname" value="<?php echo $staff_fullname?>" >
  </span></p>
  <p style="text-align: center">
<label for="email">Email:</label>
    <input type="email" name="staff_email" value="<?php echo $staff_email?>">
  </p>
		  <p style="text-align: center">
<label for="textfield3">IC Number:</label>
    <input type="text" name="staff_ic" value="<?php echo $staff_ic?>">
  </p>
  <p style="text-align: center">
<label for="password"><span style="text-align: center">Password:</span></label>
    <span style="text-align: center">
    <input name="staff_password" type="password" value="<?php echo $staff_password?>">
  </span></p>
  <p style="text-align: center">
<label for="textarea">Address:</label>
    <input type=textarea name="staff_address" value="<?php echo $staff_address?>"></input>
  </p>
  <p style="text-align: center">
<label for="textfield4">Postcode :</label>
    <input name="staff_postcode" type="text" value="<?php echo $staff_postcode?>">
  </p>
  <p style="text-align: center">
<label for="textfield5">District :</label>
    <input name="staff_district" type="text" value="<?php echo $staff_district?>">
  </p>
  <p>
          <label for="select">State:</label>
          <select name="staff_state" required="required" id="select">
            <option>-----Choose-----</option>
            <option>Perlis</option>
            <option>Kedah</option>
            <option>Pulau Pinang</option>
            <option>Perak</option>
            <option>Selangor</option>
            <option>Pahang</option>
            <option>Kuala Lumpur</option>
            <option>Melaka</option>
            <option>Johor</option>
            <option>Terengganu</option>
            <option>Kelantan</option>
            <option>Sabah</option>
            <option>Sarawak</option>
          </select>
        </p>
  <p style="text-align: center">
<label for="tel">Tel:</label>
    <input name="staff_tel" type="tel" value="<?php echo $staff_tel?>">
  </p>
	<p style="text-align: center">
<label for="textfield3">Department:</label>
    <input type="text" name="staff_department" value="<?php echo $staff_department?>">
  </p>
  <span style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif"></span>
  <p style="text-align: center">
<input type="hidden" name="staff_ic" value="<?php echo $staff_ic?>">
<input type="submit" name="AddUser" value=" OK ">
  </p>
  
</form>
<?php
if (isset($_POST['AddUser'])){
$staff_fullname = $_POST['staff_fullname'];
$staff_email = $_POST['staff_email'];
$staff_ic = $_POST['staff_ic'];
$staff_password = $_POST['staff_password'];
$staff_address = $_POST['staff_address'];
$staff_postcode = $_POST['staff_postcode'];
$staff_district = $_POST['staff_district'];
$staff_state = $_POST['staff_state'];
$staff_tel = $_POST['staff_tel'];
$staff_department = $_POST['staff_department'];
	
$conn = mysqli_connect("127.0.0.1", "root", "", "Employee") or die (mysql_error ());
// SQL query
$sql = "UPDATE staff_ SET
staff_fullname = '$staff_fullname',
staff_email = '$staff_email',
staff_password = '$staff_password',
staff_address = '$staff_address',
staff_postcode = '$staff_postcode',
staff_district = '$staff_district',
staff_state = '$staff_state',
staff_tel = '$staff_tel',
staff_ic = '$staff_ic',
staff_department = '$staff_department'
WHERE staff_ic = '$staff_ic'";
// Execute the query (the recordset $rs contains the result)
if (mysqli_query($conn, $sql)) {
echo "The record is updates successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
</td>
</tr>
  </tbody>

</table>
<p style="text-align: left"></br>
  <input type="button1" value="BACK" onclick="window.location.href='staff_detail.php?staff_ic=<?php echo $row["staff_ic"] ?>'">
</p>
</body>
</html>