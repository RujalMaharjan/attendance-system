<?php
    include_once 'connect.php';

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
                

                <div class="wrapper">
                    <?php
                        $fname= $_GET["fname"];
                        $lname= $_GET["lname"];
                        // Retrieve all records and display them
                        echo '</br>';
                        echo '<span class="login100-form-title p-b-10">'.$fname.' '.$lname.'</span>';
                    ?>

                    <table class="table table-bordered  table-hover">
                        <thead class="thead-inverse">
                        <tr>
                            <th scope="col">SN</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">rfid</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                $rfid=$_GET["RFID"];

                                $sql= "SELECT * FROM employee_record
                                WHERE RFID ='".$rfid."';";

                                $result = mysqli_query($conn, $sql);
                                $SN = 0;
                                // process every record
                                $check =mysqli_num_rows($result);
                                if ($check > 0){
                                    while($row = mysqli_fetch_assoc($result) ){
                                        $SN++;
                                        echo '<tr>';
                                        echo '   <th scope="row">'.$SN.'</th>';
                                        echo '   <td>'.$row["tdate"].'</td>';
                                        echo '   <td>'.$row["ttime"].'</td>';
                                        echo '   <td>'.$row["RFID"].'</td>';
                                        echo '</tr>';
                                    }
                                }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- <footer class="page-footer font-small blue pt-3">
			Copyright
			<div class="footer-copyright text-center py-3">© 2018 Copyright:
				<a href="index.php"> Employee Attendance</a>
			</div>
			Copyright
	
		</footer> -->
    </body>
</html>
