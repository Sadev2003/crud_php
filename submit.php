<?php

include "config.php";
 
if(isset($_POST['submit']))
       {
        $F_name = $_POST['F_name'];
        $L_name = $_POST['L_name'];
        $NIC = $_POST['NIC'];
        $Age = $_POST['Age'];

        // echo $F_name;
        // echo $L_name;
        // echo $NIC;
        // echo $Age;
        // echo '<br>';
        

        $sql="insert into emp_info(F_name,L_name,NIC,Age) values ('$F_name','$L_name','$NIC','$Age')";
        // echo $sql;
        $result = $conn->query($sql);
        if($result)
          {
            echo 'EMPLOYEE REGISTERD SUCCESSFULLY <br>';
            echo '<a href="add_employee.php">ADD_EMPLOYEE</a>';
          } 
        else{
          die(mysqli_error($conn));
          echo 'EMPLOYEE REGISTRATION FAILED.';
        }
        }

?>

