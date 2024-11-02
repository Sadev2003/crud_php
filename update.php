<?php

include "config.php";

if(isset($_POST['update'])){
    $F_name = $_POST['F_name'];
    $L_name = $_POST['L_name'];
    $NIC = $_GET['NIC'];
    $Age = $_POST['Age'];

    $sql = "UPDATE emp_info SET F_name='$F_name', L_name='$L_name', Age='$Age' WHERE NIC=$NIC";
    
    $result = $conn->query($sql);
    
    if($result == TRUE){
        echo 'DATA UPDATED SUCCESSFULLY.';
    }
    else{
        echo 'Error:' .$sql. "<br>" .$conn->error;
    }

    }

if(isset($_GET['NIC'])){
    $NIC = $_GET['NIC'];

    $sql = "SELECT * FROM emp_info WHERE NIC=$NIC";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $F_name = $row['F_name'];
            $L_name = $row['L_name'];
            $NIC = $row['NIC'];
            $Age = $row['Age'];
        }
        
    }
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    
    <title>UPDATE FORM: <?php echo $F_name," ", $L_name ?></title>
    
    </head>
    <body>
    
    <u><h1 align="center">Register here</h1></u>
    
    <form action="update.php?NIC=<?php echo $NIC ?>" method=post >
    First Name :<input type="text" name="F_name" maxlength="10" value="<?php echo $F_name ?>" required><br><br>
    Last Name :<input type="text" name="L_name" maxlength="20" value="<?php echo $L_name ?>" required><br><br>
    NIC Number :<input type="varchar" name="NIC" maxlength="12" value="<?php echo $NIC ?>" disabled required><br><br>
    Age :<input type="int" name="Age" size="2" maxlength="3" value="<?php echo $Age ?>" required><br><br>
    <input type="submit" name="update" value="update"`> 
    </form>
    
    <a href="read.php" target="_blank">
    <br>
    <button>View Data</button>
    </a>
    
    </body>
    </html>
    <?php
}


?>