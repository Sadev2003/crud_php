<!DOCTYPE html>
<html>
<head>

<title>REGISTRATION FORM</title>

</head>
<body>

<u><h1 align="center">Register here</h1></u>

<form action="submit.php" method=post>
First Name :<input type="text" name="F_name" maxlength="10" required><br><br>
Last Name :<input type="text" name="L_name" maxlength="20" required><br><br>
NIC Number :<input type="varchar" name="NIC" maxlength="12" required><br><br>
Age :<input type="int" name="Age" size="2" maxlength="3" required><br><br>
<input type="submit" name="submit"> 
</form>

<a href="read.php" target="_blank">
<br>
<button>View Data</button>
</a>

</body>
</html>