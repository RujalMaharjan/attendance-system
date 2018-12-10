<?php 
    include_once 'connect.php';

    if(isset($_GET['submit'])){
                $fname=$_GET["fname"];
                $sql= "SELECT RFID FROM employee
                WHERE fname= '".$fname."';";
                $result = mysqli_query($conn, $sql);
                
                $check =mysqli_num_rows($result);
                if ($check > 0){
                    while($row = mysqli_fetch_assoc($result) ){
                        $RFID= $row["RFID"];
                    }
                    header("location: action.php?RFID=".$RFID."&fname=".$fname."");
                    exit();
                }
                mysqli_close($conn);    
    }
?>

<html>
    <head>
        <title>Attendance Record</title>
    </head>

    <body>
    <div class="wrapper">
        <h1>Choose Employee</h1>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
            <input list="name" name="fname">
            <datalist id="name">
                <?php

                    // Retrieve all records and display them
                    $sql= "SELECT fname FROM employee ;";
                    $result = mysqli_query($conn, $sql);
                    
                    // Used for row color toggle
                    $oddrow = true;

                    // process every record
                    $check =mysqli_num_rows($result);
                    if ($check > 0){
                        while($row = mysqli_fetch_assoc($result) ){
                            echo '<option value='.$row["fname"].'>';
                        }
                    }
                    
                ?>
            </datalist>
            </br><input type="submit" name="submit" value="submit">
        </form>
    </div>
    </body>
</html>