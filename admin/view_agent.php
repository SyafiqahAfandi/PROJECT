<!doctype html>
<html>
<head>
<style>
	input[type=button] {
  width: 50%;
  background-color: #E00000;
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
  border-collapse: collapse;
  width: 100%;
}

th, td {
	border: 1px solid #ddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: red;
  color: white;
}
}
tr:nth-child(even) {
    background-color: #dddddd;
    text-align: center;	
	
}

body,td,th {
    font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
    text-align: center;
}
</style>
<meta charset="utf-8">
<title>List of Agent</title>
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
<p>
<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Employee";
// Cre ate connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['search'])) {
$searchname = $_POST['searchname'];
} else
$searchname = '';
$sql = " SELECT agent_name, agent_ic, agent_assigned, agent_state, agent_level FROM agent";
$sql = $sql . " WHERE agent_name LIKE '%" . $searchname . "%' OR agent_ic LIKE '%" . $searchname . "%' OR agent_level LIKE '%" . $searchname . "%'";
$result = mysqli_query($conn, $sql);
?>
</p>
<tbody>
	
  <tr><p style="font-style: normal; font-weight: bold; text-align: center;"><img src="image/logo.jpeg" width="62" height="60" alt="" /></p>
    <p style="font-style: normal; font-weight: bold; text-align: center; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">LIST OF AGENT</p><form action="<?php echo $_SERVER['PHP_SELF']?>?page=userview&searchkey=<?php echo $searchname?>"method="POST" style="text-align: center">
      <input type="text" name="searchname" value="<?php echo $searchname?>">
	  <input type="submit" name="search" value="Search">
    </form></p>
    <table width="85%" height="107" align="center">
      <tr>
        <th width="21%">Name of Agent</th>
		<th width="14%">IC Number</th>
		<th width="14%">Team</th>
		<th width="15%">State</th>
        <th width="15%">Level of Agent</th>
        <th width="21%" colspan="2">Action</th>
      </tr>
      <?php
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
?>
      <tr>
        <td><?php echo $row["agent_name"] ?></td>
        <td><?php echo $row["agent_ic"] ?></td>
		<td><?php echo $row["agent_assigned"] ?></td>
		<td><?php echo $row["agent_state"] ?></td>
		<td><?php echo $row["agent_level"] ?></td>
        <td><input type="button" value="View Details" onclick="window.location.href='details_agent.php?agent_ic=<?php echo $row["agent_ic"] ?>'" /></td>
      </tr>
      <?php
}
} else {
echo "<tr><td colspan='3'>0 results</td></tr>";
}
mysqli_close($conn);
?>
    </table>
</td>
  </tr>
  </tbody>
<p><a href=view_agent.php>Back</a></p>
</body>
</html>