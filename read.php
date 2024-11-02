<?php

include "config.php";

$sql = "SELECT * FROM emp_info";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>

<title>VIEW EMPLOYEE INFO</title>

</head>
<body>

<table width=1000px border=1px>


<tbody>

<?php 
     if($result->num_rows > 0)
       {
        echo '<tr><th>First Name</th><th>Last Name</th><th>NIC Number</th><th>Age</th><th>Action</th></tr>';
        while ($row = $result->fetch_assoc()) {
?>
         
<tr><td><?php echo $row['F_name']; ?></td>
<td><?php echo $row['L_name']; ?></td>
<td><?php echo $row['NIC']; ?></td>
<td><?php echo $row['Age']; ?></td>
<td><a href="update.php?NIC=<?php echo $row['NIC']; ?>" target="_blank"><button>Update</button></a> <a href="delete.php?NIC=<?php echo $row['NIC']; ?>"><button>Delete</button</a>
</td>
</tr>

<?php }
}
else{
  echo 'NO EMPLOYEES FOUND.';
}
?>
               
</tbody>
</table>

</body>
</html>

