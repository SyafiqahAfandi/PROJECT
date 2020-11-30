<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>New Agent Registration</title>
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
    font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
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
<table width="1226" height="121" border="1.0" align="center">
  <tbody>
    <tr>
      <td height="115"><form id="form1" name="form1" method="post">
        <p style="font-style: normal; font-weight: bold;"><img src="image/logo.jpeg" width="62" height="60" alt="" /></p>
        <p style="font-style: normal; font-weight: bold; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">REGISTRATION OF  AGENT        </p>
        <p>
          <label for="textfield"><span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"><span style="text-align: center"></span></span></label>
          <label for="textfield"><span style="text-align: center">Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span></label>
          <span style="text-align: center">
            <input name="agent_name" type="text" required="required" id="agent_name">
        </span></p>
        <p> <span style="text-align: center">
          <label for="textfield2">I/C Number&nbsp;&nbsp;:</label>
          &nbsp;<input name="agent_ic" type="text" required="required" id="agent_ic">
        </span></p>
        <p> <span style="text-align: center">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          Address
          <label for="textfield">:</label>
           <input name="agent_address" type="text" required="required" id="agent_address">
        </span></p>
        <p>
          <label for="textfield">Postcode &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</label>
          <input name="agent_postcode" type="text" required="required" id="agent_postcode">
        </p>
        <p>
          <label for="textfield2">District &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input name="agent_district" type="text" required="required" id="agent_district">
        </p>
        <p>
          <label for="textfield">State :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input name="agent_state" type="text" required="required" id="agent_state">
        </p>
        <p> <span style="text-align: center">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="textfield4">Email :</label>
          <input name="agent_email" type="text" required="required" id="agent_email">
        </span></p>
        <p> <span style="text-align: center">
          <label for="textfield5">Phone Number :</label>
          <input name="agent_phone" type="text" required="required" id="agent_phone">
        </span></p>
        <p> <span style="text-align: center">
          <label for="textfield">Agent Level :&nbsp;&nbsp;&nbsp;&nbsp;</label>
           <input name="agent_level" type="text" required="required" id="agent_level">
        </span></p>
        <p><span style="text-align: center">
          <label for="textfield7">Team : </label>
          <input name="agent_assigned" type="text" required="required" id="agent_assigned">
        </span></p>
        <p> <span style="text-align: center"></br>
          </br>
          <input type="submit" name="agentSubmit" value=" SUBMIT ">
      </span>          
         &nbsp; <input type="reset" name="reset" id="reset" value="RESET">
        </p>
        <p>
          <?php
if (isset($_POST['agentSubmit'])){
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
$sql = "INSERT INTO
agent (agent_name, agent_ic, agent_address, agent_postcode, agent_district, agent_state, agent_email, agent_phone, agent_level, agent_assigned)
VALUES
('$agent_name', '$agent_ic', '$agent_address', '$agent_postcode', '$agent_district', '$agent_state', '$agent_email', '$agent_phone', '$agent_level', '$agent_assigned')";
// Execute the query (the recordset $rs contains the result)
if (mysqli_query($conn, $sql)) {
echo "New record of agent created successfully";
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
<p><a href=view_agent.php>Back</a></p>
</body>
</html>