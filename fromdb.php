<?php
    include_once 'connect.php';

    // Prepare the SQL statement
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $RFID = $_POST['RFID'];
        
        $sql = "INSERT INTO employee (SN, fname, lname, mobile, address, email, RFID) 
                VALUES ( NULL,'$fname','$lname','$mobile','$address','$email','$RFID');";     

    // Execute SQL statement
        mysqli_query($conn, $sql);

    // Go to the review_data.php (optional)
    header("Location: index.php");
?>
