<?php
    include_once 'connect.php';

    // Prepare the SQL statement
        date_default_timezone_set('Asia/Kathmandu');
        $date = date('Y-m-d');
        $time = date('h:i:s', time());
        $RFID = trim($_GET['RFID']);
        
        $sql = "INSERT INTO employee_record (SN, tdate, ttime, RFID)
                VALUES ( NULL, '$date', '$time', '$RFID');";

    // Execute SQL statement
        mysqli_query($conn, $sql);


    // Go to the review_data.php (optional)
    //header("Location: index.php");
?>
