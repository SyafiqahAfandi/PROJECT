<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add New Customer Details</title>
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
    font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
}
tr:nth-child(even) {
background-color: #dddddd;
}

</style>
</head>

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


<p>&nbsp;</p>
<table width="1226" height="121" border="1.0" align="center">
  <tbody>
    <tr>
      <td height="115"><form id="form1" name="form1" method="post">
        <p style="font-style: normal; font-weight: bold;"><img src="image/logo.jpeg" width="62" height="60" alt="" /></p>
        <p style="font-style: normal; font-weight: bold;">CUSTOMER DETAILS</p>
        <p>
          <label for="textfield"><span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"><span style="text-align: center"></span></span></label>
          <label for="textfield"><span style="text-align: center">Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span></label>
          <span style="text-align: center">
            <input name="cust_name" type="text" required="required" id="cust_name">
        </span></p>
        <p> <span style="text-align: center">
          <label for="textfield2">I/C Number&nbsp;&nbsp;:</label>
          &nbsp;<input name="cust_ic" type="text" required="required" id="cust_ic">
        </span></p>
        <p> <span style="text-align: center">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          Address
          <label for="textfield">:</label>
           <input name="cust_address" type="text" required="required" id="cust_address">
        </span></p>
        <p>
          <label for="textfield">Postcode &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</label>
          <input name="cust_postcode" type="text" required="required" id="cust_postcode">
        </p>
        <p>
          <label for="textfield2">District &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input name="cust_district" type="text" required="required" id="cust_district">
        </p>
        <p>
          <label for="textfield">State :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input name="cust_state" type="text" required="required" id="cust_state">
        </p>
        <p> <span style="text-align: center">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="textfield4">Email :</label>
          <input name="cust_email" type="text" required="required" id="cust_email">
        </span></p>
        <p> <span style="text-align: center">
          <label for="textfield5">Phone Number :</label>
          <input name="cust_phone" type="text" required="required" id="cust_phone">
        </span></p>
        <p> <span style="text-align: center"></br>
          </br>
          <input type="submit" name="custSubmit" value=" SUBMIT ">
      </span>          
         &nbsp; <input type="reset" name="reset" id="reset" value="RESET">
</p>
        <p><a href="add_product.php">Next</a></p>
        <p>
          <?php
if (isset($_POST['custSubmit'])){
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
$sql = "INSERT INTO
customer (cust_name, cust_ic, cust_address, cust_postcode, cust_district, cust_state, cust_email, cust_phone)
VALUES
('$cust_name', '$cust_ic', '$cust_address', '$cust_postcode', '$cust_district', '$cust_state', '$cust_email', '$cust_phone')";
// Execute the query (the recordset $rs contains the result)
if (mysqli_query($conn, $sql)) {
echo "New record of customer added successfully";
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
</table>
</body>
</html>