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
</head>
	<title>UPDATE COURIER DETAILS</title>
	<link rel = "icon"  href = "image/logo.jpeg">
<body background="image/pic.jpg">
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
// Cre ate connection
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

<table width="200" border="1" align="center">
  <tbody>
    <tr>
      <td height="162"><p style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-style: bold;"><img src="image/logo.jpeg" width="62" height="60" alt=""/></p>
        <p style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-style: bold;"><strong>UPDATE OF COURIER</strong>
        </p>
        <form id="form1" name="form1" method="post">
		    <p>
          <label for="textfield">Courier Name:</label>
          <input name="courier_name" type="text" value="<?php echo $courier_name?>">
        </p>
        <p>
          <label for="textfield2">Consignment Number:</label>
          <input name="courier_consignmentNo" type="text" value="<?php echo $courier_consignmentNo?>">
        </p>
        <p>
          <label for="textfield5">Date Of Delivery:</label>
          <input type="text" name="courier_date_delivery" value="<?php echo $courier_date_delivery?>">
        </p>
        <p>
          <label for="textfield10">Date received:</label>
          <input name="courier_date_received" type="text"  value="<?php echo $courier_date_received?>">
      </p>
        <p>
          <label for="textfield3">Receiver Name:</label>
          <input type="text" name="courier_receiver" value="<?php echo $courier_receiver?>">
        </p>
	    <p>
			<label for="textfield4">IC Number:</label>
			<input type="text" name="courier_receiverIC" value="<?php echo $courier_receiverIC?>">
	</p>
        <p>
          <label for="tel">Receiver Contact Number:</label>
          <input type="tel" name="courier_phoneReceive" value="<?php echo $courier_phoneReceive?>">
        </p>
        <p>
          <label for="textfield11">Person Incharge:</label>
          <input name="courier_personIncharge" type="text" value="<?php echo $courier_personIncharge?>">
        </p>
        <p>
          <label for="tel2">Sender Contact Number:</label>
          <input type="tel" name="courier_phoneSender" value="<?php echo $courier_phoneSender?>">
        </p>
        <input type="hidden" name="courier_consignmentNo" value="<?php echo $courier_consignmentNo?>">
          <input type="submit" name="update" id="submit" value="Submit">
        </p>
        <p>&nbsp;</p>
    </form></td>
	
<?php
if (isset($_POST['update'])){
$courier_name = $_POST['courier_name'];
$courier_consignmentNo = $_POST['courier_consignmentNo'];
$courier_date_delivery = $_POST['courier_date_delivery'];	
$courier_date_received = $_POST['courier_date_received'];
$courier_receiver = $_POST['courier_receiver'];
$courier_phoneReceive = $_POST['courier_phoneReceive'];
$courier_personIncharge = $_POST['courier_personIncharge'];
$courier_phoneSender = $_POST['courier_phoneSender'];
	
$conn = mysqli_connect("127.0.0.1", "root", "", "Employee") or die (mysql_error ());
// SQL query
$sql = "UPDATE courier SET
courier_name = '$courier_name',
courier_consignmentNo = '$courier_consignmentNo',
courier_date_delivery = '$courier_date_delivery',	
courier_date_received = '$courier_date_received',
courier_receiver = '$courier_receiver',
courier_phoneReceive = '$courier_phoneReceive',
courier_personIncharge = '$courier_personIncharge',
courier_phoneSender = '$courier_phoneSender'
WHERE courier_consignmentNo = '$courier_consignmentNo'";
// Execute the query (the recordset $rs contains the result)
if (mysqli_query($conn, $sql)) {
echo "The record is updates successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
    </tr>
  </tbody>
</table>
<p style="text-align: center">&nbsp;</p>
<p style="text-align: left"></br>
  <input type="button1" value="BACK" onClick="window.location.href='courier_view.php'">
</p>
</body>
</html>