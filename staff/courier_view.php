<!doctype html>
<html>
<head>
<style>
	input[type=button] {
  width: 60%;
  background-color: #E00000;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=button]:hover {
  background-color: dimgrey;
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
  padding: 5px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: red;
  color: white;
}
}
tr:nth-child(even) {
background-color: #dddddd;
	
	
}
	div[type=dd] {
  background-color: #eee;
  width: 1325px;
  height: 700px;
  border: 1px dotted black;
  overflow: scroll;
	
}

</style>
<meta charset="utf-8">
<title>List of Tracking Number</title>
	<link rel = "icon"  href = "image/logo.jpeg">
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

$sql = "SELECT courier_name, courier_consignmentNo, courier_receiver, courier_phoneReceive FROM courier";
$sql = $sql . " WHERE courier_name LIKE '%" . $searchname . "%' OR courier_consignmentNo LIKE '%" . $searchname . "%' OR courier_receiver LIKE '%" . $searchname . "%'"; 

$result = mysqli_query($conn, $sql);
?>
<p style="font-family: 'Cambria', 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; text-align: center;"><img src="image/logo.jpeg" width="62" height="60" alt=""/>
<p style="font-family: 'Cambria', 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; text-align: center;"><span style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; text-align: center;"><strong>TRACKING NUMBERS</strong></span>
<p style="font-style: normal; font-weight: bold; text-align: center"><form action="<?php echo $_SERVER['PHP_SELF']?>?page=userview&searchkey=<?php echo $searchname?>"method="POST" style="text-align: center">
  <input type="text" name="searchname" value="<?php echo $searchname?>">
  <input type="submit" name="search" value="Search">
	</p></form>
</p>
<div type=dd align="center">
<table align="center">
  <tr>
<th width="20%">Courier name</th>
<th width="20%">Tracking Number</th>
<th width="20%">Receiver</th>
<th width="20%">Phone Number</th>
<th width="20%">Action</th>
</tr>
<?php
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
?>
<tr style="text-align: center">
<td><?php echo $row["courier_name"] ?></td>
<td><?php echo $row["courier_consignmentNo"] ?></td>
<td><?php echo $row["courier_receiver"] ?></td>
<td><?php echo $row["courier_phoneReceive"] ?></td>	
<td>
<input type="button" value="View Details" onclick="window.location.href='courier_detail.php?courier_consignmentNo=<?php echo $row["courier_consignmentNo"] ?>'" />
</td>
</tr>
	
<?php
}
} else {
echo "<tr><td colspan='3'>0 results</td></tr>";
}
mysqli_close($conn);
?>
	</table></div>
</body>
</html>