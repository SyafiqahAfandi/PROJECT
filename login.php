<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>S&F Resources | Staff Login</title>
	<link rel = "icon" href = "logo.png">
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
  width: 50%;
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
}
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
		

  input[type=back] {
    display: inline-block;
    border-radius: 4px;
    background-color: #f4511e;
    border: none;
    color: #FFFFFF;
    text-align: left;
    font-size: 15px;
    padding: 10px;
    width: 100px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
}

input[type=back] span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

input[type=back] span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  left: -20px;
  transition: 0.5s;
}

input[type=back]:hover span {
  padding-left: 25px;
}

input[type=back]:hover span:after {
  opacity: 1;
  left: 0;
}
    </style>

</head>

<body style="text-align: center" background="image/pic.jpg">
<table width="312" height="391" border="1" align="center">
  <tbody>
    <tr bgcolor="#FFFFFF" style="text-align: center; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-style: bold;">
      <td width="296" height="385"><p><img src="image/UsersIcon.png" width="150" height="148" alt=""/></p>
      <p><strong>STAFF LOGIN</strong></p>
      <form  id="form1" name="form1" method="post">
        <p>
          <input name="staff_ic" type="text" required="required" id="textfield" placeholder="IC Number..">
        </p>
        <p>
          <input name="staff_password" type="password" required="required" id="password" placeholder="Password..">
        </p>
        <p>
          <input type="submit" name="submit" id="submit" value="Submit">
          
        </p>
      </form>
      <p>
        <?php
if (isset($_POST['submit'])){
$staff_ic = $_POST['staff_ic'];
$staff_password = $_POST['staff_password'];
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Employee";

// Create connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT staff_ic FROM staff_
WHERE staff_ic = '$staff_ic' AND
staff_password = PASSWORD('$staff_password')";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) == 1) {
	echo '<script>window.location="../EmployeeSystem/staff/home.php"</script>';
} else {

echo '<script>alert("Incorrect Username or Password, Try Again!")</script>';
echo '<script>window.location="../EmployeeSystem/login.php"</script>';

}
} else {
echo '<p>Hello please login.</p>';
$staff_username = '';
$_SESSION['staff_username'] = '';
}
?>
        Doesn't have account ? <a href="staff_register.php">Sign Up</a> now !</p>
      <p><span style="text-align: center"></span>
        <input type="back" value="BACK"  onclick="window.location.href='choose.php'">
      </p></td>
		
    </tr>
  </tbody>
</table>
</body>
</html>