<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete Agent</title>
	<link rel = "icon" href ="image/logo.jpeg">
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
$agent_name = '';
$agent_ic = '';
$agent_address = '';
$agent_postcode = '';
$agent_district = '';
$agent_state = '';
$agent_email = '';
$agent_phone = '';
$agent_level = '';
$agent_assigned = '';
if (isset($_GET['agent_ic'])) {
$user = $_GET['agent_ic'];
// Create connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT agent_name, agent_ic, agent_address, agent_postcode, agent_district, agent_state, agent_email, agent_phone, agent_level, agent_assigned
FROM agent
WHERE agent_ic='$user'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
$row = mysqli_fetch_assoc($result);
$agent_name = $row['agent_name'];
$agent_ic = $row['agent_ic'];
$agent_address = $row['agent_address'];
$agent_postcode = $row['agent_postcode'];
$agent_district = $row['agent_district'];
$agent_state = $row['agent_state'];
$agent_email = $row['agent_email'];
$agent_phone = $row['agent_phone'];
$agent_level = $row['agent_level'];
$agent_assigned = $row['agent_assigned'];
} else {
echo "0 results";
}
mysqli_close($conn); 
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>?agent_ic=<?php echo $agent_ic?>">
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
<tbody>
  <tr>
    <td height="115"><form id="form1" name="form1" method="post"><p>&nbsp;</p>
        <p style="font-style: normal; font-weight: bold;"><img src="image/logo.jpeg" width="62" height="60" alt="" /></p>
        <p style="font-style: normal; font-weight: bold; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">LIST OF  AGENT</p>
        <p>
          <label for="textfield"><span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"><span style="text-align: center"></span></span></label>
          <label for="textfield"><span style="text-align: center">Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span></label>
          <span style="text-align: center">
            <input name="agent_name" type="text" value="<?php echo $agent_name?>" id="agent_name">
          </span></p>
        <p> <span style="text-align: center">
          <label for="textfield2">I/C Number&nbsp;&nbsp;:</label>
          &nbsp;<input name="agent_ic" type="text" value="<?php echo $agent_ic?>" id="agent_ic">
        </span></p>
        <p> <span style="text-align: center">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          Address
          <label for="textarea">:</label>
          <input name="agent_address" type="text" value="<?php echo $agent_address?>" id="agent_address">
        </span></p>
        <p>
          <label for="textfield">Postcode &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</label>
          <input name="agent_postcode" type="text" value="<?php echo $agent_postcode?>" id="agent_postcode">
        </p>
        <p>
          <label for="textfield2">District &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input name="agent_district" type="text" value="<?php echo $agent_district?>" id="agent_district">
        </p>
        <p>
          <label for="textfield4">State :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input name="agent_state" type="text" value="<?php echo $agent_state?>" id="agent_state">
        </p>
        <p> <span style="text-align: center">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="textfield4">Email : &nbsp;&nbsp;&nbsp;</label>
          <input name="agent_email" type="text" value="<?php echo $agent_email?>" id="agent_email">
        </span></p>
        <p> <span style="text-align: center">
          <label for="textfield5">Phone Number :</label>
          <input name="agent_phone" type="text" value="<?php echo $agent_phone?>" id="agent_phone">
        </span></p>
        <p> <span style="text-align: center">
          <label for="textfield6">Agent Level :</label>
          <input name="agent_level" type="text" value="<?php echo $agent_level?>" id="agent_level">
        </span></p>
		  <p> <span style="text-align: center">
          <label for="textfield7">Team :</label>
          <input name="agent_assigned" type="text" value="<?php echo $agent_assigned?>" id="agent_assigned">
        </span></p>
        <p> <span style="text-align: center"></br>
          </br>
          <input type="submit" name="agentDelete" value=" DELETE ">
    	  <p><a href="details_agent.php?agent_ic=<?php echo $row["agent_ic"] ?>">Back</a>
        <p>
          <?php
if (isset($_POST['agentDelete'])){
$agent_name = $_POST['agent_name'];
$agent_ic = $_POST['agent_ic'];
$agent_address = $_POST['agent_address'];
$agent_postcode = $_POST['agent_postcode'];
$agent_district = $_POST['agent_district'];
$agent_state = $_POST['agent_state'];
$agent_email = $_POST['agent_email'];
$agent_phone = $_POST['agent_phone'];
$agent_level = $_POST['agent_level'];
$agent_assigned = $_POST['agent_assigned']; 

$conn = mysqli_connect("127.0.0.1", "root", "", "Employee") or die (mysql_error ());
// SQL query
$sql = "DELETE FROM agent WHERE agent_ic = '$agent_ic'"; 
// Execute the query (the recordset $rs contains the result)
if (mysqli_query($conn, $sql)) {
echo "The record of agent is deleted successfully";
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