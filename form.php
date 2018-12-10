<html lang="en">
<head>
    <title>Form</title>
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
    <div class="limiter">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<a class="navbar-brand" href="index.php">Employee Attendance System</a>
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
							<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					  </form>
					</div>
			</nav>

			<span class="titleerr">
				<?php
					if(isset($_GET['id'])) {
						echo  $_GET['id'];
					}
				?>				
			</span>

		<div class="container-login100">
            <div class="wrap-employee100 p-t-5 p-b-5">
                <span class="login100-form-title p-b-10">
                            Employee Form
                </span>
                <form  class="login100-form validate-form" action="fromdb.php" method="POST">
                    <div class="wrap-inputform100 validate-input m-t-35 m-b-25" data-validate = "Enter First Name">
                        <input class="input100" type="text" name="fname">
						<span class="focus-input100" data-placeholder="First Name"></span>
					</div>
                    <div class="wrap-inputform100 validate-input m-t-35 m-b-25" data-validate = "Enter Last Name">
                        <input class="input100" type="text" name="lname">
						<span class="focus-input100" data-placeholder="Last Name"></span>
					</div>
                    <div class="wrap-inputform100 validate-input m-t-35 m-b-25" data-validate = "Enter Mobile Number">
                        <input class="input100" type="text" name="mobile">
						<span class="focus-input100" data-placeholder="Mobile Number"></span>
					</div>
                    <div class="wrap-inputform100 validate-input m-t-35 m-b-25" data-validate = "Enter Address">
                        <input class="input100" type="text" name="address">
						<span class="focus-input100" data-placeholder="Address"></span>
					</div>
                    <div class="wrap-inputform100 validate-input m-t-35 m-b-25" data-validate = "Enter E-mail Address">
                        <input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="E-mail Address"></span>
					</div>
                    <div class="wrap-inputform100 validate-input m-t-35 m-b-25" data-validate = "Enter RFID">
                        <input class="input100" type="text" name="RFID">
						<span class="focus-input100" data-placeholder="RFID Number"></span>
					</div>
                    <div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Submit
						</button>
					</div>
                </form>
            </div>
        </div>
        <footer class="page-footer font-small blue pt-3">
			<!-- Copyright -->
			<div class="footer-copyright text-center py-3">© 2018 Copyright:
				<a href="index.php"> Employee Attendance</a>
			</div>
			<!-- Copyright -->
	
		</footer>
	</div>
	
	

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/bootstrap/js/popper.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/daterangepicker/moment.min.js"></script>
            <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>