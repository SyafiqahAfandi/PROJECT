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
    font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
}
tr:nth-child(even) {
background-color: #dddddd;
}
</style>
</head>
	<title>ADD COURIER</title>
	<link rel = "icon" href ="image/logo.jpeg">
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
      <td height="162"><p style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-style: bold;"><img src="image/logo.jpeg" width="62" height="60" alt=""/></p>
        <p style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-style: bold;"><strong>ADD NEW COURIER DETAILS</strong>
        </p>
        <form id="form1" name="form1" method="post">
		    <p>
          <label for="textfield">Courier Name:</label>
          <input name="courier_name" type="text" required="required" id="textfield">
        </p>
        <p>
          <label for="textfield2">Consignment Number:</label>
          <input name="courier_consignmentNo" type="text" required="required" id="textfield2">
        </p>
        <p>
          <label for="textfield5">Date Of Delivery:</label>
          <input type="text" name="courier_date_delivery" id="textfield5">
        </p>
        <p>
          <label for="textfield10">Date received:</label>
          <input name="courier_date_received" type="text"  id="textfield10">
      </p>
        <p>
          <label for="textfield3">Receiver Name:</label>
          <input type="text" name="courier_receiver" id="textfield3">
        </p>
        <p>
          <label for="textfield4">IC Number:</label>
          <input type="text" name="courier_receiverIC" id="textfield4">
        </p>
        <p>
          <label for="tel">Receiver Contact Number:</label>
          <input type="tel" name="courier_phoneReceive" id="tel">
        </p>
        <p>
          <label for="textfield11">Person Incharge:</label>
          <input name="courier_personIncharge" type="text" required="required" id="textfield11">
        </p>
        <p>
          <label for="tel2">Sender Contact Number:</label>
          <input type="tel" name="courier_phoneSender" id="tel2">
        </p>
        
          <input type="submit" name="submit" id="submit" value="Submit">
        </p>
        <p>&nbsp;</p>
	<?php
if (isset($_POST['submit'])){
$courier_name = $_POST['courier_name'];
$courier_consignmentNo = $_POST['courier_consignmentNo'];
$courier_date_delivery = $_POST['courier_date_delivery'];	
$courier_date_received = $_POST['courier_date_received'];
$courier_receiver = $_POST['courier_receiver'];
$courier_receiverIC = $_POST['courier_receiverIC'];
$courier_phoneReceive = $_POST['courier_phoneReceive'];
$courier_personIncharge = $_POST['courier_personIncharge'];
$courier_phoneSender = $_POST['courier_phoneSender'];
	
$conn = mysqli_connect("127.0.0.1", "root", "", "Employee") or die (mysql_error ());
// SQL query
$sql = "INSERT INTO
courier(courier_name, courier_consignmentNo, courier_date_delivery, courier_date_received, courier_receiver, courier_phoneReceive, courier_receiverIC, courier_personIncharge, courier_phoneSender)
VALUES
('$courier_name', '$courier_consignmentNo', '$courier_date_delivery', '$courier_date_received', '$courier_receiver', '$courier_receiverIC', '$courier_phoneReceive', '$courier_personIncharge', '$courier_phoneSender')";
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