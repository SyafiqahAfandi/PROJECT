<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login as :</title>
	<link rel = "icon" href = "logo.png">
<style type="text/css">
body {
    background-color: #C8C4C4;
}
	th {
  background-color: #4CAF50;
  color: white;
}
	input[type=button] {
  width: 50%;
  
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border-radius: 12px;
  cursor: pointer;
  border: 1px solid none;
		letter-spacing: 3px;
		font-size: 20px;
  transition-duration: 1.4s; /* Safari */
  transition-duration: 1.4s;	
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
		
  
	}
	

input[type=button]:hover {
  background-color: #f44336;
  color: white;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

}
	

</style>
</head>

<body style="text-align: center" background="image/pic.jpg">
<p>&nbsp;</p>
<table width="282" height="364" border="12px" align="center">
  <tbody>
    <tr style="text-align: center">
      <td width="272" bgcolor="#FFFFFF"><p><span bgcolor="#FFFFFF"><span style="text-align: center" bgcolor="#FFFFFF"></span></span><span style="text-align: center"></span></p>
        <p><img src="image/logo.jpeg" width="100" height="102" alt=""/></p>
        <p><img src="image/logo1.png" width="150" height="76" alt=""/></p>
      <p>
		  		  
      <form>
<input type="button" value="ADMIN" onclick="window.location.href='adminlogin.php'" />
</form>
		  
      <form>
<input type="button" value="STAFF" onclick="window.location.href='login.php'" />
</form>
</p>
      <p>&nbsp;</p></td>
    </tr>
  </tbody>
</table>
</body>
</html>