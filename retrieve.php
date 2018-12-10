<?php
    include_once 'connect.php';
    if(isset($_GET['mail'])){
        $email=$_GET['mail'];
        $sql= "SELECT * FROM employee
        WHERE email= '".$email."';";
        $result = mysqli_query($conn, $sql);
        
        $check =mysqli_num_rows($result);
        if ($check > 0){
            while($row = mysqli_fetch_assoc($result) ){
                $RFID= $row["RFID"];
                $fname= $row["fname"];
                $lname= $row["lname"];
            }
            header("location: action.php?RFID=".$RFID."&fname=".$fname."&lname=".$lname."");
            exit();
        }
        mysqli_close($conn);    
}
?>