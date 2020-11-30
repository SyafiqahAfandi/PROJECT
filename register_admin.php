<!doctype html>
<html>
	<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
		
input[type=reset] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=reset]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;

</style>
<head>
<meta charset="utf-8">
<title>Sign Up</title>
	<link rel = "icon" href = "logo.png">
<style type="text/css">
body {
    background-color: #C8C4C4;
}
	a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 3px 6px;
  text-align: center; 
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
</style>
</head>

<body style="text-align: center" background="image/pic.jpg">
<span style="text-align: center"></span><img src="signup.png" width="348" height="142" alt=""/>
<table width="350" height="391" border="1" align="center">
  <tbody>
    <tr>
      <td bgcolor="#FFFFFF" style="text-align: center; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;"><span bgcolor="#FFFFFF"></span>
        <form id="form1" name="form1" method="post">
          <p><span style="text-align: justify">
            <input name="admin_fullname" type="text" required="required" id="textfield" placeholder="Full Name..">
          </span></p>
          <p>
            <span style="text-align: justify">
            <input name="admin_email" type="email" required="required" id="email" placeholder="Email..">
          </span></p>
          <p>
            <span style="text-align: justify">
            <input name="admin_username" type="text" required="required" id="textfield2" placeholder="Username..">
          </span></p>
          <p>
            <span style="text-align: justify">
            <input name="admin_password" type="password" required="required" id="password" placeholder="Password..">
          </span></p>
          <p>
            <input type="submit" name="submit" id="submit" value="Submit">
            <input type="reset" name="reset" id="reset" value="Reset">
          </p>
        </form>      
        <p>
          <?php
if (isset($_POST['submit'])){
$admin_fullname = $_POST['admin_fullname'];
$admin_email = $_POST['admin_email'];
$admin_username = $_POST['admin_username'];	
$admin_password = $_POST['admin_password'];


$conn = mysqli_connect("127.0.0.1", "root", "", "Employee") or die (mysql_error ());
// SQL query
$sql = "INSERT INTO
admin(admin_fullname, admin_email, admin_username, admin_password)
VALUES
('$admin_fullname', '$admin_email', '$admin_username', PASSWORD('$admin_password'))";
// Execute the query (the recordset $rs contains the result)
if (mysqli_query($conn, $sql)) {
echo "New admin record created successfully. ";
	
	;
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
      </p>
      <p>Already have an account ? <a href="adminlogin.php">Sign In</a> here !</p>
      <p>
        
      </p></td>
		
    </tr>
  </tbody>
</table>
</body>
</html>