<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add New Product Details</title>
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
        <p style="font-style: normal; font-weight: bold;">PRODUCT DETAILS</p>
        <p>
          <span style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">
            <label for="textfield">ID &nbsp;(Customer IC)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
          
            <input name="product_id" type="text" required="required" id="product_id">
          </span></p>
        <p> <span style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">
          <label for="textfield2">Product Name&nbsp;&nbsp;:</label>
          &nbsp;<input name="product_name" type="text" required="required" id="product_name">
        </span></p>
        <p> <span style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          Price 
          <label for="textfield">(RM) :</label>
           <input name="product_price" type="text" required="required" id="product_price">
        </span></p>
        <p>
          <span style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">
          <label for="textfield">Quantity&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</label>
          <input name="product_qty" type="text" required="required" id="product_qty">
          </span></p>
        <p>&nbsp;</p>
        <p>
          <span style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">
          <label for="textfield2">Comment &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input name="product_comment" type="text" required="required" id="product_comment">
          </span></p>
        <p> <span style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif"></br>
          </br>
          <input type="submit" name="agentSubmit" value=" SUBMIT ">
        </span>          
          <span style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">&nbsp; 
          <input type="reset" name="reset" id="reset" value="RESET">
          </span></p>
        <p>&nbsp;</p>
        <p>
          <?php
if (isset($_POST['agentSubmit'])){
$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_qty = $_POST['product_qty'];
$product_comment = $_POST['product_comment'];
	
$total = $product_price * $product_qty ;
	
$conn = mysqli_connect("127.0.0.1", "root", "", "Employee") or die (mysql_error ());
// SQL query
$sql = "INSERT INTO
product (product_id, product_name, product_price, product_qty,  product_comment, total)
VALUES
('$product_id', '$product_name', '$product_price', '$product_qty', '$product_comment', '$total')";
// Execute the query (the recordset $rs contains the result)
if (mysqli_query($conn, $sql)) {
echo "Total : RM $total <br><br>" ; 
echo "New record of product added successfully";
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