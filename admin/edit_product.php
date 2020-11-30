<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Product Details</title>
	<link rel = "icon" href ="image/logo.jpeg">
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
$product_id = '';
$product_name = '';
$product_price = '';
$product_qty = '';
$product_comment = '';
$total = '';

if (isset($_GET['product_id'])) {
$user = $_GET['product_id'];
// Create connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT product_id, product_name, product_price, product_qty, product_comment,total FROM product WHERE product_id='$user'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
$row = mysqli_fetch_assoc($result);
$product_id = $row['product_id'];
$product_name = $row['product_name'];
$product_price = $row['product_price'];
$product_qty = $row['product_qty'];
$product_comment = $row['product_comment'];
$total = $row['total'];

} else {
echo "0 results";
}
mysqli_close($conn);
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>?product_id=<?php echo $product_id?>">
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
        <p style="font-style: normal; font-weight: bold;">UPDATE PRODUCT DETAILS</p>
        <p>
          <label for="textfield"><span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"><span style="text-align: center"></span></span></label>
          <label for="textfield"><span style="text-align: center"> ID &nbsp;: </span></label>
          <span style="text-align: center">
            <input name="product_id" type="text" value="<?php echo $product_id?>" id="product_id">
          </span></p>
        <p> <span style="text-align: center">
          <label for="textfield2">Product Name&nbsp;&nbsp;:</label>
          &nbsp;<input name="product_name" type="text" value="<?php echo $product_name?>" id="product_name">
        </span></p>
        <p> <span style="text-align: center">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label for="number"> Price (RM):</label>
        <input type="number" name="product_price" value="<?php echo $product_price?>" id="product_price">
        </span></p>
        <p>
          <label for="number2"> Quantity :</label>
          <input type="number" name="product_qty" value="<?php echo $product_qty?>" id="product_qty">
        </p>
        <p><span style="text-align: center">
          <label for="textfield3">Comment&nbsp;:</label>
		<input name="product_comment" type="text" value="<?php echo $product_comment?>" id="product_comment">
        </span></p>
		<p><span style="text-align: center">
          <label for="textfield3">Total&nbsp;:</label>
		<input name="total" type="text" value="<?php echo $total?>" id="total">
        </span></p>
        <p> <span style="text-align: center"></br>
          </br>
        <input type="submit" name="productUpdate" value=" UPDATE "></span>        
        <p><a href="../admin/view_product.php?product_id=<?php echo $row["product_id"] ?>">Back</a>
        <p>
          <?php
if (isset($_POST['productUpdate'])){
$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_qty = $_POST['product_qty'];
$product_comment = $_POST['product_comment'];
$total = $_POST['total'];	

$conn = mysqli_connect("127.0.0.1", "root", "", "Employee") or die (mysql_error ());
// SQL query
$sql = "UPDATE product SET
product_id = '$product_id', 
product_name = '$product_name',
product_price = '$product_price', 
product_qty = '$product_qty', 
product_comment = '$product_comment',
total='$total'
 WHERE product_id ='$product_id'";

// Execute the query (the recordset $rs contains the result)
if (mysqli_query($conn, $sql)) {

echo "The record of product details is updated successfully";
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