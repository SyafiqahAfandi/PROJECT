<!DOCTYPE html>
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
    font-family: arial, sans-serif;
}
tr:nth-child(even) {
background-color: #dddddd;
}
</style>
<meta charset="utf-8">
<title>Register Staff</title>
	<link rel = "icon" href ="image/logo.jpeg">
</head>
<body background="image/pic.jpg">
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
	 <a href="courier_add.php">Add New Courier</a>
		</div>
  <li style="float:right"><a href="choose.php">Log Out</a></li>
</div>
  </li>
</ul>
<p>&nbsp;</p>
<table width="200" border="1" align="center">
  <tbody>
    <tr>
      <td height="162" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif"><p style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-style: bold;"><img src="image/logo.jpeg" width="62" height="60" alt=""/></p>
        <p style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-style: bold;"><strong>ADD STAFF</strong>
        </p>
        <form id="form1" name="form1" method="post">
		    <p>
          <label for="textfield">Fullname:</label>
          <input name="staff_fullname" type="text" required="required" id="textfield">
        </p>
            <p>
          <label for="textfield5">IC Number:</label>
          <input type="text" name="staff_ic" id="textfield5">
        </p>
        <p>
          <label for="email">Email:</label>
          <input name="staff_email" type="email" required="required" id="email">
      </p>
        <p>
          <label for="password">Password:</label>
          <input name="staff_password" type="password" required="required" id="password">
        </p>
        <p>
          <label for="textarea">Address:</label>
          <textarea name="staff_address" required="required" id="textarea"></textarea>
        </p>
        <p>
          <label for="textfield3">Postcode :</label>
          <input name="staff_postcode" type="text" required="required" id="textfield3">
        </p>
        <p>
          <label for="textfield4">District :</label>
          <input name="staff_district" type="text" required="required" id="textfield4">
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
        <p>
          <label for="tel">Tel:</label>
          <input name="staff_tel" type="tel" required="required" id="tel">
        </p>
        <p>
          <label for="textfield6">Department:</label>
          <input type="text" name="staff_department" id="textfield6">
        </p>
        <p>
          <input type="submit" name="submit" id="submit" value="Submit">
        </p>
        <p>&nbsp;</p>
	<?php
if (isset($_POST['submit'])){
$staff_fullname = $_POST['staff_fullname'];
$staff_email = $_POST['staff_email'];
$staff_password = $_POST['staff_password'];
$staff_address = $_POST['staff_address'];
$staff_postcode = $_POST['staff_postcode'];
$staff_district = $_POST['staff_district'];
$staff_state = $_POST['staff_state'];
$staff_tel = $_POST['staff_tel'];
$staff_ic = $_POST['staff_ic'];
$staff_department = $_POST['staff_department'];


$conn = mysqli_connect("127.0.0.1", "root", "", "Employee") or die (mysql_error ());
// SQL query
$sql = "INSERT INTO
staff_(staff_fullname, staff_ic, staff_email, staff_password, staff_address, staff_postcode, staff_district, staff_state, staff_tel, staff_department)
VALUES
('$staff_fullname', '$staff_ic', '$staff_email', PASSWORD('$staff_password'), '$staff_address', '$staff_postcode', '$staff_district', '$staff_state', '$staff_tel', '$staff_department')";
// Execute the query (the recordset $rs contains the result)
if (mysqli_query($conn, $sql)) {
echo "New staff record created successfully. ";
	;
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
    </form></td>
		
    </tr>
  </tbody>
</table>
<p style="text-align: center">&nbsp;</p>

</body>
</html>