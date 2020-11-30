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
		input[type=tel], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
		input[type=textarea], select {
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
          <p>
          <label for="textfield">Fullname:</label>
          <input name="staff_fullname" type="text" required="required" id="textfield">
        </p>
        <p>
          <label for="textfield2">Username:</label>
          <input name="staff_username" type="text" required="required" id="textfield2">
        </p>
        <p>
          <label for="textfield5">IC Number:</label>
          <input type="text" name="staff_ic" id="textfield5">
        </p>
        <p>
          <label for="email">Email:</label>
          <input name="staff_email" type="email" required="required" id="email">
      </p>
        <p>
          <label for="password">Password:</label>
          <input name="staff_password" type="password" required="required" id="password">
        </p>
        <p>
          <label for="textarea">Address:</label>
          <textarea type="textarea" name="staff_address" required="required" id="textarea"></textarea>
        </p>
        <p>
          <label for="textfield3">Postcode :</label>
          <input name="staff_postcode" type="text" required="required" id="textfield3">
        </p>
        <p>
          <label for="textfield4">District :</label>
          <input name="staff_district" type="text" required="required" id="textfield4">
        </p>
        <p>
          <label for="select">State:</label>
          <select name="staff_state" required="required" id="select">
            <option>-----Choose-----</option>
            <option>Perlis</option>
            <option>Kedah</option>
            <option>Pulau Pinang</option>
            <option>Perak</option>
            <option>Selangor</option>
            <option>Pahang</option>
            <option>Kuala Lumpur</option>
            <option>Melaka</option>
            <option>Johor</option>
            <option>Terengganu</option>
            <option>Kelantan</option>
            <option>Sabah</option>
            <option>Sarawak</option>
          </select>
        </p>
        <p>
          <label for="tel">Tel:</label>
          <input name="staff_tel" type="tel" required="required" id="tel">
        </p>
        <p>
          <label for="textfield6">Department:</label>
          <input type="text" name="staff_department" id="textfield6">
        </p>
        <p>
            <input type="submit" name="submit" id="submit" value="Submit">
            <input type="reset" name="reset" id="reset" value="Reset">
          </p>
        </form>      
        <p>
          <?php
if (isset($_POST['submit'])){
$staff_fullname = $_POST['staff_fullname'];
$staff_email = $_POST['staff_email'];
$staff_username = $_POST['staff_username'];	
$staff_password = $_POST['staff_password'];
$staff_address = $_POST['staff_address'];
$staff_postcode = $_POST['staff_postcode'];
$staff_district = $_POST['staff_district'];
$staff_state = $_POST['staff_state'];
$staff_tel = $_POST['staff_tel'];
$staff_ic = $_POST['staff_ic'];
$staff_department = $_POST['staff_department'];


$conn = mysqli_connect("127.0.0.1", "root", "", "Employee") or die (mysql_error ());
// SQL query
$sql = "INSERT INTO
staff_(staff_fullname, staff_username, staff_ic, staff_email, staff_password, staff_address, staff_postcode, staff_district, staff_state, staff_tel, staff_department)
VALUES
('$staff_fullname', '$staff_username', '$staff_ic', '$staff_email', PASSWORD('$staff_password'), '$staff_address', '$staff_postcode', '$staff_district', '$staff_state', '$staff_tel', '$staff_department')";
// Execute the query (the recordset $rs contains the result)
if (mysqli_query($conn, $sql)) {
echo "New record created successfully. ";
	
	;
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
      </p>
      <p>Already have an account ? <a href="login.php">Sign In</a> here !</p>
      <p>
        
      </p></td>
		
    </tr>
  </tbody>
</table>
</body>
</html>