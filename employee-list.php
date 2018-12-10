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

<html>
    <head>
        <title>Attendance Record</title>
        <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->	
            <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->	
            <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->	
            <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="css/util.css">
            <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--===============================================================================================-->
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="employee-list.php">Employee Attendance System</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        
                                <li class="nav-item">
                                    <a class="nav-link" href="employee-list.php">Employee List</a>
                                </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                                
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a class="navbar-brand" href="index.php">Logout </a></button>
                        </form>
                        </div>
        </nav>
        
        <div class="limiter">
            <div class="workspace">
                <span class="login100-form-title p-b-10">
                    Employee List
                </span>
                
                    <table class="table table-bordered  table-hover">
                        <thead class="thead-inverse">
                            <tr>
                                <th scope="col">SN</th>
                                <th scope="col">FIRST NAME</th>
                                <!-- <th scope="col">LAST NAME</th> -->
                                <th scope="col">EMAIL ADDRESS</th>
                                <th scope="col">CONTACT NUMBER</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <?php

                                // Retrieve all records and display them
                                $sql= "SELECT * FROM employee;";
                                $result = mysqli_query($conn, $sql);


                                // process every record
                                $check =mysqli_num_rows($result);
                                if ($check > 0){
                                    while($row = mysqli_fetch_assoc($result) ){
                                       
                                        $email= $row["email"];
                                        echo '<tr>';
                                        echo '   <th scope="row">'.$row["SN"].'</th>';
                                        echo '   <td> <A href="employee-list.php?mail='.$email.'">'.$row["fname"].' '.$row["lname"].'</td>';
                                        // echo '   <td >'.$row["lname"].'</td>';
                                        echo '   <td>'.$row["email"].'</td>';
                                        echo '   <td>'.$row["mobile"].'</td>';
                                        echo '</tr>';
                                    }
                                }

                            ?>
                        </tbody>
                        
                    </table>
                
            </div> 
        </div>
        <footer class="page-footer font-small blue pt-3">
			<!-- Copyright -->
			<div class="footer-copyright text-center py-3">© 2018 Copyright:
				<a href="index.php"> Employee Attendance</a>
			</div>
			<!-- Copyright -->
	
		    </footer>
    </body>
</html>
