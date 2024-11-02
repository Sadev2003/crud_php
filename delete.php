<?php

include "config.php";

if(isset($_GET['NIC'])){
    $id=$_GET['NIC'];

    
    $sql="DELETE FROM emp_info WHERE NIC=$id";
    
    $result = $conn->query($sql);
    if($result){
        header('location:read.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>